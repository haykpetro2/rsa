<?php

namespace App\Http\Controllers;

use App\DataTables\UsersDataTable;
use App\FileUpload;
use App\Http\Requests\UploadPdfRequest;
use App\OrderType;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Telegram\Bot\Laravel\Facades\Telegram;
use App\Http\Requests\StoreOrderRequest;
use App\Order;
use App\OrderStatus;

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    // Ignores notices and reports all other kinds... and warnings
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    // error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return view('orders.index');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData(Request $request)
    {

        if ($request->ajax()) {
            $orders = Order::select([
                'orders.id as order_id',
                'orders.created_at',
                'orders.name',
                'orders.email',
                'orders.phone',
                'order_types.name as order_type',
                'order_statuses.name as order_status',
//                'buttons',
                'order_statuses.id as status_id',
                'orders.updated_at'
            ])->join('order_statuses', 'orders.status_id', '=', 'order_statuses.id')
                ->join('order_types', 'orders.type_id', '=', 'order_types.id');


            return Datatables::of($orders)
                ->addColumn('actions', function ($order) {
                    return
                        ''
                        .'<a class="btn btn-xs btn-default" data-toggle="tooltip" title="'.trans('order.View Order').'" href="'.action('OrdersController@show', ['id'=>$order->order_id]).'"><i class="fa fa-lg fa-eye"></i></a>'
                        . '<a class="btn btn-xs btn-default" data-toggle="tooltip" title="' . trans('order.Edit Order') . '" href="' . action('OrdersController@edit', ['id' => $order->order_id]) . '"><i class="fa fa-lg fa-edit"></i></a>'
                        . '<a class="btn btn-xs btn-default" data-toggle="tooltip" title="' . trans('order.Delete Order') . '" href="' . action('OrdersController@destroy', ['id' => $order->order_id]) . '" data-method="delete" data-token="' . csrf_token() . '" data-confirm="' . trans('general.Are you sure?') . '"><i class="fa fa-lg fa-trash-o"></i></a>'
                        . '';

                })
                ->editColumn('order_status', function ($order) {
                    $template = "";
                    if ($order->status_id == OrderStatus::STATUS_NEW) {
                        $template = '<span class="label label-success">';
                    } else if ($order->status_id == OrderStatus::STATUS_PROGRESS) {
                        $template = '<span class="label label-warning">';
                    } else if ($order->status_id == OrderStatus::STATUS_DECLINED) {
                        $template = '<span class="label label-danger">';
                    } else {
                        $template = '<span class="label label-default">';
                    }
                    $template .= $order->order_status;
                    $template .= '</span>';
                    return $template;
                })
                ->removeColumn('status_id')
                ->make(true);
        }
        return null;
    }

    /*public function show(UsersDataTable $dataTable, $id)
    {
        return $dataTable->render('orders.show',$id);
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        $order = new Order();
        $order->status_id = OrderStatus::STATUS_NEW;

        session()->put('url.intended', URL::previous());

        return view('orders.create', compact('order'));
    }

    public function createFromPdf()
    {
        $order = new Order();
        $order->status_id = OrderStatus::STATUS_NEW;

        session()->put('url.intended', URL::previous());

        return view('orders.createFromPdf', compact('order'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        $order = new Order($request->all());

        $order->status_id = OrderStatus::STATUS_NEW;

        $order->save();

        flash()->success('Order has been created successfully.');
        return Redirect::intended('/');
    }

    public function uploadStore(Request $request)
    {

        $this->validate($request,[
            'file' => 'required|mimes:pdf|max:400000',
        ]);
        $order = new Order($request->all());

        $order->status_id = OrderStatus::STATUS_NEW;


        $data = [];
        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        $fileName = time() + rand(1, 999999) . '.' . $extension;
        $file->move(public_path('/uploads/pdf/'), $fileName);
        $data[] = $fileName;

        $data = [
            'file' => $data
        ];

        $order->fields = json_encode($data);
        if (empty($order->name)) {
            $order->name = 'PDF';
        }

        $order->save();

        flash()->success('Order has been created successfully.');
        return Redirect::intended('/');
    }

    public function postOsago(StoreOrderRequest $request)
    {

        $order = new Order($request->all());

        $order->status_id = OrderStatus::STATUS_NEW;
        $order->type_id = OrderType::TYPE_OSAGO;
        if (empty($order->name)) {
            $order->name = 'Расчет';
        }

        $order->save();

        Telegram::sendMessage([
            'chat_id' => config('telegram.chat_id'),
            'text' => trans('order.New OSAGO Order', ['name' => $order->name, 'phone' => $order->phone])
        ]);
        if ($request->ajax()) {
            return ['success' => true, 'message' => 'Order has been created successfully.'];
        } else {
            flash()->success('Order has been created successfully.');
            return redirect('success');
        }
    }

    public function postOsago1(StoreOrderRequest $request)
    {
        $order = new Order();
        $order->phone = $request->input('phone');
        $order->status_id = OrderStatus::STATUS_NEW;
        $order->type_id = OrderType::TYPE_OSAGO;

        $data = [];

        foreach ($request->file('photos') as $photo) {
            if ($photo != null) {
                $extension = $photo->getClientOriginalExtension();
                $fileName = time() + rand(1, 999999) . '.' . $extension;
                $photo->move(public_path('photos/'), $fileName);
                $data[] = $fileName;

            }
        }
        $data = [
            'photos' => $data
        ];
        $order->fields = json_encode($data);
        if (empty($order->name)) {
            $order->name = 'Загруженные документы';
        }

        $order->save();

        Telegram::sendMessage([
            'chat_id' => config('telegram.chat_id'),
            'text' => trans('order.New OSAGO Order', ['name' => $order->name, 'phone' => $order->phone])
        ]);

        if ($request->ajax()) {
            return ['success' => true, 'message' => 'Order has been created successfully.'];
        } else {
            flash()->success('Order has been created successfully.');
            $notification = array(
                'message' => 'Большое спасибо, все отправлено, с вами свяжется в ближайшее время наш менеджер',
                'alert-type' => 'success'
            );
            return redirect('osagoForm1')->with($notification);
        }
    }

    public function postOsago2(StoreOrderRequest $request)
    {

        $order = new Order();
        $order->phone = $request->input('phone');
        $order->status_id = OrderStatus::STATUS_NEW;
        $order->type_id = OrderType::TYPE_OSAGO;


        $order->fields = json_encode(['city' => $request->input('city')]);

        if (empty($order->name)) {
            $order->name = 'По телефону';
        }

        if ($order->fields) {
            $order->name = 'Стать агентом';
        }

        $order->save();

        Telegram::sendMessage([
            'chat_id' => config('telegram.chat_id'),
            'text' => trans('order.New AGENT Order', ['name' => $order->name, 'phone' => $order->phone])
        ]);
        if ($request->ajax()) {
            return ['success' => true, 'message' => 'Order has been created successfully.'];
        } else {
            flash()->success('Order has been created successfully.');
//            return redirect('osagoForm1');
            $notification = array(
                'message' => 'Большое спасибо, все отправлено, с вами свяжется в ближайшее время наш менеджер',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
    }

    public function postOsago3(StoreOrderRequest $request)
    {

        $order = new Order();
        $order->phone = $request->input('phone');
        $order->status_id = OrderStatus::STATUS_NEW;
        $order->type_id = OrderType::TYPE_OSAGO;

        if (empty($order->name)) {
            $order->name = 'Заявка по телефону';
        }

        $order->save();

        Telegram::sendMessage([
            'chat_id' => config('telegram.chat_id'),
            'text' => trans('order.New OSAGO Order', ['name' => $order->name, 'phone' => $order->phone])
        ]);
        if ($request->ajax()) {
            return ['success' => true, 'message' => 'Order has been created successfully.'];
        } else {
            flash()->success('Order has been created successfully.');
//            return redirect('osagoForm1');
            $notification = array(
                'message' => 'Большое спасибо, все отправлено, с вами свяжется в ближайшее время наш менеджер',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
    }

    public function sendMessage(StoreOrderRequest $request)
    {

        $order = new Order();
        $order->name = $request->input('name');
        $order->email = $request->input('email');
        $order->phone = $request->input('email');
        $order->comment = $request->input('comment');
        $order->save();

        Telegram::sendMessage([
            'chat_id' => config('telegram.chat_id'),
            'text' => trans('order.New Comment', ['name' => $order->name, 'phone' => $order->phone, 'email' => $order->email, 'comment' => $order->comment])
        ]);
        if ($request->ajax()) {
            return ['success' => true, 'message' => 'Order has been created successfully.'];
        } else {
            flash()->success('Order has been created successfully.');
//            return redirect('osagoForm1');
            $notification = array(
                'message' => 'Большое спасибо, все отправлено, с вами свяжется в ближайшее время наш менеджер',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
    }


    public function postKasko(StoreOrderRequest $request)
    {
        $order = new Order($request->all());

        $order->status_id = OrderStatus::STATUS_NEW;
        $order->type_id = OrderType::TYPE_KASKO;
        if (empty($order->name)) {
            $order->name = 'Расчет';
        }
        $order->name = $request->input('name');
        $order->save();

        Telegram::sendMessage([
            'chat_id' => config('telegram.chat_id'),
            'text' => trans('order.New KASKO Order', ['name' => $order->name, 'phone' => $order->phone])
        ]);

        if ($request->ajax()) {
            return ['success' => true, 'message' => 'Order has been created successfully.'];
        } else {
            flash()->success('Order has been created successfully.');
            return redirect('success');
        }
    }

    public function postKasko1(StoreOrderRequest $request)
    {
        $order = new Order;
        $order->phone = $request->input('phone');
        $order->status_id = OrderStatus::STATUS_NEW;
        $order->type_id = OrderType::TYPE_KASKO;
        if (empty($order->name)) {
            $order->name = 'Расчет';
        }
        $order->name = $request->input('name');
        $data = [];

        if($request->file('photos')){
            foreach ($request->file('photos') as $photo) {
                if ($photo != null) {
                    $extension = $photo->getClientOriginalExtension();
                    $fileName = time() + rand(1, 999999) . '.' . $extension;
                    $photo->move(public_path('photos/'), $fileName);
                    $data[] = $fileName;

                }
            }
        }

        $order->fields = json_encode(
            [
                'city' => $request->input('city'),
                'mark' => $request->input('mark'),
                'model' => $request->input('model'),
                'power' => $request->input('power'),
                'cost' => $request->input('cost'),
                'credit' => $request->input('credit'),
                'young_driver_age' => $request->input('young_driver_age'),
                'young_driver_staj' => $request->input('young_driver_staj'),
                'photos' => $data
            ]
        );

        $order->save();

        Telegram::sendMessage([
            'chat_id' => config('telegram.chat_id'),
            'text' => trans('order.New KASKO Order', ['name' => $order->name, 'phone' => $order->phone])
        ]);

        if ($request->ajax()) {
            return ['success' => true, 'message' => 'Order has been created successfully.'];
        } else {
            flash()->success('Order has been created successfully.');
            $notification = array(
                'message' => 'Большое спасибо, все отправлено, с вами свяжется в ближайшее время наш менеджер',
                'alert-type' => 'success'
            );
            return redirect('casco')->with($notification);
        }
    }

    public function postTravel(StoreOrderRequest $request)
    {
        $order = new Order;
        $order->phone = $request->input('phone');
        $order->status_id = OrderStatus::STATUS_NEW;
        $order->type_id = OrderType::TYPE_TRAVEL;
        if (empty($order->name)) {
            $order->name = 'Туристическое';
        }

        $order->fields = json_encode(
            [
                'country' => $request->input('country'),
                'person_count' => $request->input('person_count'),
                'dates' => $request->input('dates'),
            ]
        );

        $order->save();

        Telegram::sendMessage([
            'chat_id' => config('telegram.chat_id'),
            'text' => trans('order.New TRAVEL Order', ['name' => $order->name, 'phone' => $order->phone])
        ]);

        if ($request->ajax()) {
            return ['success' => true, 'message' => 'Order has been created successfully.'];
        } else {
            flash()->success('Order has been created successfully.');
            $notification = array(
                'message' => 'Большое спасибо, все отправлено, с вами свяжется в ближайшее время наш менеджер',
                'alert-type' => 'success'
            );
            return redirect('travel')->with($notification);
        }
    }

    public function postTravel2(StoreOrderRequest $request)
    {

        $order = new Order();
        $order->phone = $request->input('phone');
        $order->status_id = OrderStatus::STATUS_NEW;
        $order->type_id = OrderType::TYPE_TRAVEL;

        if (empty($order->name)) {
            $order->name = 'Заявка по телефону';
        }

        $order->save();

        Telegram::sendMessage([
            'chat_id' => config('telegram.chat_id'),
            'text' => trans('order.New TRAVEL Order', ['name' => $order->name, 'phone' => $order->phone])
        ]);
        if ($request->ajax()) {
            return ['success' => true, 'message' => 'Order has been created successfully.'];
        } else {
            flash()->success('Order has been created successfully.');
//            return redirect('osagoForm1');
            $notification = array(
                'message' => 'Большое спасибо, все отправлено, с вами свяжется в ближайшее время наш менеджер',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
    }

    public function postEstate(StoreOrderRequest $request)
    {
        $order = new Order;
        $order->phone = $request->input('phone');
        $order->status_id = OrderStatus::STATUS_NEW;
        $order->type_id = OrderType::TYPE_ESTATE;
        if (empty($order->name)) {
            $order->name = 'Имущество';
        }

        $order->fields = json_encode(
            [
                'person_name' => $request->input('person_name'),
                'estate_name' => $request->input('estate_name'),
            ]
        );

        $order->save();

        Telegram::sendMessage([
            'chat_id' => config('telegram.chat_id'),
            'text' => trans('order.New ESTATE Order', ['name' => $order->name, 'phone' => $order->phone])
        ]);

        if ($request->ajax()) {
            return ['success' => true, 'message' => 'Order has been created successfully.'];
        } else {
            flash()->success('Order has been created successfully.');
            $notification = array(
                'message' => 'Большое спасибо, все отправлено, с вами свяжется в ближайшее время наш менеджер',
                'alert-type' => 'success'
            );
            return redirect('estate')->with($notification);
        }
    }

    public function postTo(StoreOrderRequest $request)
    {
        $order = new Order($request->all());

        $order->status_id = OrderStatus::STATUS_NEW;
        $order->type_id = OrderType::TYPE_TO;
        if (empty($order->name)) {
            $order->name = 'Расчет';
        }

        $order->save();

        Telegram::sendMessage([
            'chat_id' => config('telegram.chat_id'),
            'text' => trans('order.New TO Order', ['name' => $order->name, 'phone' => $order->phone])
        ]);

        if ($request->ajax()) {
            return ['success' => true, 'message' => 'Order has been created successfully.'];
        } else {
            flash()->success('Order has been created successfully.');
            return redirect('success');
        }
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
//        dd($order->fields);
        $this->authorize('show', $order);


        return view('orders.show', compact('order'));
    }


    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $this->authorize('edit', $order);
        session()->put('url.intended', URL::previous());

        return view('orders.edit', compact('order'));
    }

    public function export()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->parameters([
                'buttons' => ['pdf'],
            ]);
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $this->authorize('update', $order);
        $order->update($request->all());
        flash()->success('Order has been updated successfully.');
        return Redirect::intended('/');
    }


    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $this->authorize('destroy', $order);
        $order->delete();
        flash()->success('Order has been deleted successfully.');
        return redirect()->back();
    }


    public function pdf($id)
    {
        $order = Order::query()->findOrFail($id);
        $fields = $order->fields;
        $pdf = PDF::loadView('orders.invoice', ['order' => $order, 'fields' => $fields])->setPaper('a4', 'portrait');
        return $pdf->download($order->id.'.pdf');
    }

}
