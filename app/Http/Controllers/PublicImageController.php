<?php

namespace App\Http\Controllers;

use App\FileUpload;
use App\Http\Requests\StoreOrderRequest;
use App\Order;
use App\OrderStatus;
use App\OrderType;
use App\Stores\PublicImageStore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PublicImageController extends Controller
{
    protected $image;

    public function __construct(PublicImageStore $imageStore) {
        $this->image = $imageStore;
    }

    public function imageUpload(StoreOrderRequest $request) {
        $this->image->upload(Input::all());
        $fileName = time() + rand(1, 999999) + rand(1, 999999) + rand(1, 999999) + rand(1, 999999);
        $gallery = new FileUpload();
        $gallery->save();
        $order = new Order($request->all());

        $order->status_id = OrderStatus::STATUS_NEW;
        $order->type_id = OrderType::TYPE_OSAGO;
        if(empty($order->name)){
            $order->name = 'Расчет';
        }

        $order->save();


//        if($request->ajax()){
//            return ['success' => true, 'message' => 'Order has been created successfully.'];
//        }else{
//            flash()->success('Order has been created successfully.');
//            return redirect('osagoForm1');
//        }
    }
   /* public function store(Request $request)
    {
        foreach ($request->file('photo  s') as $photo) {
            $this->image->upload(Input::all());
            $fileName = time() + rand(1, 999999) + rand(1, 999999) + rand(1, 999999) + rand(1, 999999);
//            $extension = $photo->getClientOriginalExtension();
//            $photo->move(public_path('uploads/gallery/'), $fileName);
//            imageConvert(public_path('uploads/gallery/'), $fileName, $extension);
            $gallery = new FileUpload();
//            $gallery->name = $fileName . '.webp';

        }
        return back();
    }*/

    public function imageDelete() {
        return $this->image->delete(Input::get('name'));
    }
}
