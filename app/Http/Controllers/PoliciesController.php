<?php

namespace App\Http\Controllers;


use App\Http\Requests\StorePolicyRequest;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Policy;
use App\Client;
use App\Vehicle;
use App\Driver;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\Datatables\Datatables;

class PoliciesController extends Controller
{

    public function index()
    {
//        $policies = Policy::orderBy('created_at', 'desc')->paginate(15);
        return view('policies.index');
    }

    public function anyData(Request $request)
    {
        if ($request->ajax()) {
            $policies = Policy::select([
                'policies.id as policy_id',
                'policies.company_name',
                'policies.sign_date',
                'policies.policy_serial',
                'policies.policy_number',
                'policies.time_from',
                'policies.date_from',
                'policies.time_to',
                'policies.date_to',
                'clients.id as client_id',
                'clients.last_name',
                'clients.first_name',
                'clients.middle_name',
                'clients.date_birth',
                'clients.cell_phone',
                'policies.p_total',
            ])->join('clients', 'policies.client_id', '=', 'clients.id')->byUser();

            return Datatables::of($policies)
                ->addColumn('actions', function ($policy) {
                    return
                        ''
                        //.'<a class="btn btn-xs btn-default" data-toggle="tooltip" title="'.trans('policy.Create Additional Policy').'" href="'.action('PoliciesController@create', ['client_id'=>$policy->client_id]).'"><i class="fa fa-lg fa-plus-square-o"></i></a>'
                        .'<a class="btn btn-xs btn-default" data-toggle="tooltip" title="'.trans('policy.Export Policy').'" href="'.action('PoliciesController@export', ['id'=>$policy->policy_id]).'"><i class="fa fa-lg fa-print"></i></a>'
                        .'<a class="btn btn-xs btn-default" data-toggle="tooltip" title="'.trans('policy.Delete Policy').'" href="'.action('PoliciesController@destroy', ['id'=>$policy->policy_id]).'" data-method="delete" data-token="'.csrf_token().'" data-confirm="'.trans('general.Are you sure?').'"><i class="fa fa-lg fa-trash-o"></i></a>'
                        .'<a class="btn btn-xs btn-default" data-toggle="tooltip" title="'.trans('policy.Edit Policy').'" href="'.action('PoliciesController@edit', ['id'=>$policy->policy_id]).'"><i class="fa fa-lg fa-edit"></i></a>'
                        .'';

                })
                ->editColumn('company_name', function($policy){
                    if($policy->company_name == trans('policy.Company Megaruss')){
                        return '<span class="label label-success">'.$policy->company_name.'</span>';
                    }else{
                        return '<span class="label label-danger">'.$policy->company_name.'</span>';
                    }
                })
                ->editColumn('policy_number', '{{$policy_serial}} {{$policy_number}}')
                ->addColumn('policy_dates', '{{$date_from}} {{$time_from}} - {{$date_to}} {{$time_to}}')
                ->addColumn('client_title', function($policy){
                    return '<a href="'.action('ClientsController@view', ['id'=>$policy->client->id]).'">'.$policy->client->legal_name.'</a>';
                })
                ->make(true);

        }

        return null;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $policy = new Policy();

        $now = Carbon::now();
        $next_year = Carbon::now()->addYear()->subDay();

        $policy->date_from = $now->format('d.m.Y');
        $policy->time_from = $now->addHour()->format('H').':00';
        $policy->date_to = $next_year->format('d.m.Y');
        $policy->time_to = '24:00';
        $policy->sign_date = $now->format('d.m.Y');
        $policy->same_client_owner = true;
        $policy->p_base = 4118;
        $policy->p_k1 = 1.8;
        $policy->p_k2 = 1.0;
        $policy->p_k3 = 1.0;
        $policy->p_k4 = 1.0;
        $policy->p_k5 = 1.0;
        $policy->p_k6 = 1.0;
        $policy->p_k7 = 1.0;
        $policy->p_k8 = 1.0;
        $policy->policy_serial = 'EEE';
        $policy->dk_date = $next_year->format('d.m.Y');
        $policy->t_amount = 500.0;
        $policy->f_amount = 2000.0;

        $max_policy_number = Policy::all()->max('policy_number');
        if(!$max_policy_number){
            $max_policy_number = '0724573036';
        }
        $max_receipt_number = Policy::all()->max('receipt_number');
        if(!$max_receipt_number){
            $max_receipt_number = '1711116';
        }
        $policy->policy_number = str_pad((int)$max_policy_number + 1, 10, '0', STR_PAD_LEFT);
        $policy->receipt_number = (int)$max_receipt_number + 1;

        $vehicles = [];
        $client = Client::find($request->get('client_id'));
        if($client){
            $policy->client = $client;
            $policy->drivers = $client->drivers;
            $vehicles = $client->vehicles;
            //if(!empty($vehicles)){
            //    $policy->vehicle = $client->vehicles()->first();
            //}
        }
        $policy->company_name = trans('policy.Company Megaruss');
        $policy->owner_company = false;

        session()->put('url.intended', URL::previous());

        $companies = Policy::getCompanyOptionsForSelect();
        $makers = Vehicle::getMakeOptionsForSelect();

        return view('policies.create', compact('policy','vehicles','companies','makers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePolicyRequest $request)
    {

        $client = Client::find($request->input('client.id'));

        if(!$client){
            $client = new Client();
        }
        $client->fill($request->input('client'));
        $client->save();

        if($request->has('vehicle.id')){
            $vehicle = Vehicle::find($request->input('vehicle.id'));
        }else{
            $vehicle = new Vehicle();
        }
        $vehicle->fill($request->input('vehicle'));
        $vehicle->client()->associate($client);
        $vehicle->save();

        $policy = new Policy($request->all());
        $policy->client()->associate($client);
        if($request->input('same_client_owner')){
            $policy->setOwnerData($client);
        }
        $policy->vehicle()->associate($vehicle);
        $policy->save();

        $drivers_sync = [];
        foreach($request->input('drivers') as $key => $driver){
            if(!empty($driver['name'])){
                $d = Driver::find($driver['id']);
                if(!$d){
                    $d = new Driver();
                }
                $d->fill($driver);
                $d->client()->associate($client);
                $d->save();
                array_push($drivers_sync, $d->id);
            }
        }
        $policy->drivers()->sync($drivers_sync);

        flash()->success('Policy has been created successfully.');
        return Redirect::intended('/');
    }


    public function show($id)
    {
        $policy = Policy::findOrFail($id);

        $this->authorize('show', $policy);

        return view('policies.show', compact('policy'));
    }


    public function edit($id)
    {
        $policy = Policy::findOrFail($id);

        $this->authorize('edit', $policy);

        $vehicles = [];
        if($policy->client){
            $vehicles = $policy->client->vehicles;
        }
        session()->put('url.intended', URL::previous());

        $companies = Policy::getCompanyOptionsForSelect();
        $makers = Vehicle::getMakeOptionsForSelect();

        return view('policies.edit', compact('policy','vehicles','companies','makers'));
    }

    public function update(StorePolicyRequest $request, $id)
    {
        $policy = Policy::findOrFail($id);

        $this->authorize('update', $policy);

        $client = Client::find($request->input('client.id'));

        if(!$client){
            $client = new Client();
        }
        $client->fill($request->input('client'));
        $client->save();

        if($request->has('vehicle.id')){
            $vehicle = Vehicle::find($request->input('vehicle.id'));
        }else{
            $vehicle = new Vehicle();
        }
        $vehicle->fill($request->input('vehicle'));
        $vehicle->client()->associate($client);
        $vehicle->save();

        $policy->fill($request->all());
        $policy->client()->associate($client);
        if($request->input('same_client_owner')){
            $policy->setOwnerData($client);
        }
        $policy->vehicle()->associate($vehicle);
        $policy->save();

        $drivers_sync = [];
        foreach($request->input('drivers') as $key => $driver){
            if(!empty($driver['name'])){
                $d = Driver::find($driver['id']);
                if(!$d){
                    $d = new Driver();
                }
                $d->fill($driver);
                $d->client()->associate($client);
                $d->save();
                array_push($drivers_sync, $d->id);
            }
        }
        $policy->drivers()->sync($drivers_sync);

        flash()->success('Policy has been updated successfully.');
        return Redirect::intended('/');
    }


    public function destroy($id)
    {
        $policy = Policy::findOrFail($id);

        $this->authorize('destroy', $policy);

        $policy->delete();
        flash()->success('policy has been deleted successfully.');
        return redirect()->back();
    }

    public function export($id)
    {
        $policy = Policy::findOrFail($id);

        $this->authorize('export', $policy);

        $excel = Excel::load(storage_path('app/files/policy_template.xls'), function($doc) use ($policy) {

            $sheet = $doc->setActiveSheetIndex(0);

            $str = $policy->date_from;

            //Date from 10.10.2016
            $sheet->setCellValue('AB16', $str[0]);
            $sheet->setCellValue('AD16', $str[1]);
            $sheet->setCellValue('AF16', $str[3]);
            $sheet->setCellValue('AI16', $str[4]);
            $sheet->setCellValue('AL16', $str[6]);
            $sheet->setCellValue('AM16', $str[7]);
            $sheet->setCellValue('AN16', $str[8]);
            $sheet->setCellValue('AO16', $str[9]);

            $str = $policy->date_to;

            //Date to 10.10.2017
            $sheet->setCellValue('AS16', $str[0]);
            $sheet->setCellValue('AU16', $str[1]);
            $sheet->setCellValue('AW16', $str[3]);
            $sheet->setCellValue('AZ16', $str[4]);
            $sheet->setCellValue('BC16', $str[6]);
            $sheet->setCellValue('BD16', $str[7]);
            $sheet->setCellValue('BE16', $str[8]);
            $sheet->setCellValue('BF16', $str[9]);

            //Client
            $sheet->setCellValue('T7', $policy->client->legal_name);
            if($policy->client->is_company){
                $sheet->setCellValue('T8', $policy->client->company_inn);
                $sheet->setCellValue('Z9', '');
            }else{
                $sheet->setCellValue('T8', $policy->client->date_birth);
                $sheet->setCellValue('AO9', $policy->client->passport_full);
            }
            $sheet->setCellValue('K12', $policy->client->full_address);

            //Owner
            $sheet->setCellValue('T19', $policy->legal_name);
            if($policy->owner_company){
                $sheet->setCellValue('T20', $policy->owner_company_inn);
                $sheet->setCellValue('Z21', '');
            }else{
                $sheet->setCellValue('T20', $policy->date_birth);
                $sheet->setCellValue('AO21', $policy->passport_full);
            }
            $sheet->setCellValue('K24', $policy->full_address);

            //Vehicle
            $sheet->setCellValue('B29', $policy->vehicle->make . ' ' . $policy->vehicle->model);
            $sheet->setCellValue('B31', $policy->vehicle->year);
            $sheet->setCellValue('N29', $policy->vehicle->sign);
            $sheet->setCellValue('B35', 'B');
            $sheet->setCellValue('N35', $policy->vehicle->power);
            $sheet->setCellValue('AM32', $policy->vehicle->document_name);
            $sheet->setCellValue('AQ33', $policy->vehicle->document_serial);
            $sheet->setCellValue('AP35', $policy->vehicle->document_number);
            $sheet->setCellValue('I36', $policy->vehicle->dk_number);
            $sheet->setCellValue('AZ36', $policy->vehicle->dk_date);

            //VIN
            $chrArray = preg_split('//u', $policy->vehicle->vin, -1, PREG_SPLIT_NO_EMPTY);
            $sheet->setCellValue('X30', array_key_exists(0, $chrArray)?$chrArray[0]:'');
            $sheet->setCellValue('Z30', array_key_exists(1, $chrArray)?$chrArray[1]:'');
            $sheet->setCellValue('AB30', array_key_exists(2, $chrArray)?$chrArray[2]:'');
            $sheet->setCellValue('AD30', array_key_exists(3, $chrArray)?$chrArray[3]:'');
            $sheet->setCellValue('AF30', array_key_exists(4, $chrArray)?$chrArray[4]:'');
            $sheet->setCellValue('AH30', array_key_exists(5, $chrArray)?$chrArray[5]:'');
            $sheet->setCellValue('AJ30', array_key_exists(6, $chrArray)?$chrArray[6]:'');
            $sheet->setCellValue('AL30', array_key_exists(7, $chrArray)?$chrArray[7]:'');
            $sheet->setCellValue('AN30', array_key_exists(8, $chrArray)?$chrArray[8]:'');
            $sheet->setCellValue('AP30', array_key_exists(9, $chrArray)?$chrArray[9]:'');
            $sheet->setCellValue('AR30', array_key_exists(10, $chrArray)?$chrArray[10]:'');
            $sheet->setCellValue('AT30', array_key_exists(11, $chrArray)?$chrArray[11]:'');
            $sheet->setCellValue('AU30', array_key_exists(12, $chrArray)?$chrArray[12]:'');
            $sheet->setCellValue('AV30', array_key_exists(13, $chrArray)?$chrArray[13]:'');
            $sheet->setCellValue('AW30', array_key_exists(14, $chrArray)?$chrArray[14]:'');
            $sheet->setCellValue('AX30', array_key_exists(15, $chrArray)?$chrArray[15]:'');
            $sheet->setCellValue('AY30', array_key_exists(16, $chrArray)?$chrArray[16]:'');

            //Drivers
            if(!$policy->unrestricted){
                $index = 1;
                $row_index = 45;
                foreach($policy->drivers as $driver){
                    if($driver){
                        $dl = explode(" ", $driver->driver_license);
                        $sheet->setCellValue('B'.$row_index, $index);
                        $sheet->setCellValue('D'.$row_index, $driver->name);
                        $sheet->setCellValue('AC'.$row_index, $driver->date_birth);
                        if(count($dl)>1){
                            $sheet->setCellValue('AL'.$row_index, array_key_exists(0, $dl)?$dl[0]:'');
                            $sheet->setCellValue('AP'.$row_index, array_key_exists(1, $dl)?$dl[1]:'');
                        }else{
                            $sheet->setCellValue('AL'.$row_index, '');
                            $sheet->setCellValue('AP'.$row_index, array_key_exists(0, $dl)?$dl[0]:'');
                        }
                        $sheet->setCellValue('AW'.$row_index, $driver->exp);
                        $sheet->setCellValue('AZ'.$row_index, $driver->kbm);

                        $index++;
                        $row_index++;
                    }
                }
            }

            $str = $policy->date_from;

            //Date from 10.10.2016
            $sheet->setCellValue('W52', $str[0].$str[1]);
            $sheet->setCellValue('Z52', $str[3].$str[4]);
            $sheet->setCellValue('AG52', $str[6].$str[7].$str[8].$str[9]);

            $str = $policy->date_to;

            //Date to 10.10.2017
            $sheet->setCellValue('AN52', $str[0].$str[1]);
            $sheet->setCellValue('AQ52', $str[3].$str[4]);
            $sheet->setCellValue('AX52', $str[6].$str[7].$str[8].$str[9]);

            //Policy number
            $sheet->setCellValue('O62', $policy->policy_serial);
            $sheet->setCellValue('V62', $policy->policy_number);

            $str = $policy->sign_date;
            //Date to 10.10.2017
            $sheet->setCellValue('AS64', $str[0].$str[1]);
            $sheet->setCellValue('AV64', $str[3].$str[4]);
            $sheet->setCellValue('BC64', $str[6].$str[7].$str[8].$str[9]);

            //Calc
            $sheet->setCellValue('B70', number_format($policy->p_base, 2));
            $sheet->setCellValue('H70', number_format($policy->p_k1, 2));
            $sheet->setCellValue('N70', number_format($policy->p_k2, 2));
            $sheet->setCellValue('T70', number_format($policy->p_k3, 2));
            $sheet->setCellValue('Z70', number_format($policy->p_k4, 2));
            $sheet->setCellValue('AF70', number_format($policy->p_k5, 2));
            $sheet->setCellValue('AL70', number_format($policy->p_k6, 2));
            $sheet->setCellValue('AR70', number_format($policy->p_k7, 2));
            $sheet->setCellValue('AW70', number_format($policy->p_k8, 2));
            $sheet->setCellValue('BB70', number_format($policy->p_total, 2));
            $sheet->setCellValue('S72', $policy->receipt_number);

            //Policy Sheet
            $sheet = $doc->setActiveSheetIndex(1);

            //Time from 10:00
            $chrArray = preg_split('//u', $policy->time_from, -1, PREG_SPLIT_NO_EMPTY);
            $str = $policy->time_from;
            $sheet->setCellValue('BT15', array_key_exists(0, $chrArray)?$chrArray[0]:'');
            $sheet->setCellValue('BW15', array_key_exists(1, $chrArray)?$chrArray[1]:'');
            $sheet->setCellValue('CC15', array_key_exists(3, $chrArray)?$chrArray[3]:'');
            $sheet->setCellValue('CF15', array_key_exists(4, $chrArray)?$chrArray[4]:'');

            if($policy->unrestricted){
                $sheet->setCellValue('CS79', 'X');
            }else{
                $sheet->setCellValue('CS82', 'X');
            }

            $str = $policy->sign_date;
            //Date to 10.10.2017
            $sheet->setCellValue('AE137', $str[0].$str[1]);
            $sheet->setCellValue('AM137', $str[3].$str[4]);
            $sheet->setCellValue('BH137', $str[8].$str[9]);

        });

        $filename = ($policy->client->legal_name . " - " . $policy->policy_serial.$policy->policy_number);
        $excel->setFilename($filename);
        $excel->download('xls');
    }

    public function exclude($id){
        $policy = Policy::findOrFail($id);

        $this->authorize('exclude', $policy);

        $policy->notified = true;
        $policy->save();
        flash()->success(trans('general.SMS Notification excluded'));
        return redirect()->back();
    }
}
