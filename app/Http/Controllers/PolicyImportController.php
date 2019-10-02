<?php

namespace App\Http\Controllers;

use App\Client;
use App\Driver;
use App\Policy;
use App\Vehicle;
use Illuminate\Http\Request;
use Validator;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class PolicyImportController extends Controller
{

    public function getImport()
    {
        return view('policies.import');
    }

    public function getImportXls()
    {
        return view('policies.importxls');
    }

    public function getPreview()
    {
        return view('policies.import_preview');
    }

    public function postImport(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'import_file' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('p/import')
                ->withErrors($validator)
                ->withInput();
        }
        if ($request->hasFile('import_file')) {

            $path = $request->file('import_file')->getRealPath();

            $data = Excel::load($path, function ($reader) {
            }, 'UTF-8')->get();

            dd($data);

            if (!empty($data) && $data->count()) {
                foreach ($data as $o) {

                    if (!empty($o->itogovaya_summa)) {

                        $client = new Client();

                        $client->last_name = mb_convert_case($o->familiya, MB_CASE_TITLE, 'UTF-8');
                        $client->first_name = mb_convert_case($o->imya, MB_CASE_TITLE, 'UTF-8');
                        $client->middle_name = mb_convert_case($o->otchestvo, MB_CASE_TITLE, 'UTF-8');
                        $client->date_birth = $o->data_rozhdeniya->format('d.m.Y');
                        $client->passport_serial = '0000';
                        $client->passport_number = '000000';
                        $client->full_address = '';
                        $client->full_address_json = '';
                        $client->cell_phone = '';
                        $client->email = 'import@halk.ru';
                        $client->notes = '';
                        $client->is_company = false;

                        $client->save();

                        $vehicle = new Vehicle();

                        $vehicle->type = 1;
                        $vehicle->make = $o->marka_ts;
                        $vehicle->model = $o->model_ts;
                        $vehicle->year = $o->god_vypuska_ts;
                        $vehicle->power = '';
                        if ($o->moshchnost_dvigatelya) {
                            $vehicle->power = $o->moshchnost_dvigatelya;
                        }
                        $vehicle->trailer = false;
                        $vehicle->sign = $o->reg_nomer_ts;
                        $vehicle->vin = empty($o->vin) ? 'ОТСУТСТВУЕТ' : $o->vin;
                        $vehicle->document_name = '';
                        $vehicle->document_serial = '';
                        $vehicle->document_number = '';
                        $vehicle->dk_number = '';

                        $vehicle->client()->associate($client);
                        $vehicle->save();

                        $vehicles = [];
                        $vehicles[] = $vehicle;

                        $driver = new Driver();

                        $driver->name = $client->legal_name;
                        $driver->date_birth = $client->date_birth;
                        $driver->kbm = 1.0;
                        $driver->client()->associate($client);
                        $driver->save();

                        $drivers_sync = [];
                        array_push($drivers_sync, $driver->id);

                        $policy = new Policy();
                        $policy->date_from = $o->data_nachala_dogovora->format('d.m.Y');
                        $policy->time_from = '00:00';
                        $policy->date_to = $o->data_okonchaniya_dogovora->format('d.m.Y');
                        $policy->time_to = '24:00';
                        $policy->sign_date = $o->data_zaklyucheniya_dogovora->format('d.m.Y');

                        $policy->p_base = 4118;
                        $policy->p_k1 = 1.0;
                        $policy->p_k2 = 1.0;
                        $policy->p_k3 = 1.0;
                        $policy->p_k4 = 1.0;
                        $policy->p_k5 = 1.0;
                        $policy->p_k6 = 1.0;
                        $policy->p_k7 = 1.0;
                        $policy->p_k8 = 1.0;
                        $policy->policy_serial = 'ЕЕЕ';
                        $policy->policy_number = str_replace('ЕЕЕ', '', $o->nomer_dogovora);
                        $max_receipt_number = Policy::all()->max('receipt_number');
                        if (!$max_receipt_number) {
                            $max_receipt_number = '1711116';
                        }
                        $policy->receipt_number = (int)$max_receipt_number + 1;
                        $policy->unrestricted = false;

                        $policy->company_name = $o->strakhovaya_kompaniya;
                        $policy->owner_company = false;
                        $policy->same_client_owner = true;
                        $policy->setOwnerData($client);

                        $policy->p_total = $o->itogovaya_summa;

                        $policy->client()->associate($client);
                        $policy->vehicle()->associate($vehicle);
                        $policy->save();

                        $policy->drivers()->sync($drivers_sync);
                    }
                }
            }

            return back()->with('success', 'Excel Data Imported successfully.');

        }

        flash()->success('Policies has been imported successfully.');

        return redirect('online/policies');

    }

    public function postImportXls(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'import_file' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('p/importXls')
                ->withErrors($validator)
                ->withInput();
        }
        if ($request->hasFile('import_file')) {

            $path = $request->file('import_file')->getRealPath();

            $data = Excel::load($path, function ($reader) {
            }, 'UTF-8')->get();


//            dd($data);
            if (!empty($data) && $data->count()) {
                foreach ($data as $o) {

//                    if(!empty($o->itogovaya_summa)){

                    $client = new Client();

                    $client->last_name = mb_convert_case($o->fio_strakhovatelya, MB_CASE_TITLE, 'UTF-8');
//                        $client->first_name = mb_convert_case($o->fio_strakhovatelya, MB_CASE_TITLE, 'UTF-8');
//                        $client->middle_name = mb_convert_case($o->fio_strakhovatelya, MB_CASE_TITLE, 'UTF-8');
//                        $client->date_birth = $o->data_rozhdeniya->format('d.m.Y');
//                        $client->passport_serial = '0000';
//                        $client->passport_number = '000000';
//                        $client->full_address = '';
//                        $client->full_address_json = '';
//                        $client->cell_phone = '';
//                        $client->email = 'import@halk.ru';
                    $client->notes = '';
                    $client->is_company = false;

                    $client->save();

                    /*$vehicle = new Vehicle();

                    $vehicle->type = 1;
                    $vehicle->make = $o->marka_ts;
                    $vehicle->model = $o->model_ts;
                    $vehicle->year = $o->god_vypuska_ts;
                    $vehicle->power = '';
                    if($o->moshchnost_dvigatelya){
                        $vehicle->power = $o->moshchnost_dvigatelya;
                    }
                    $vehicle->trailer = false;
                    $vehicle->sign = $o->reg_nomer_ts;
                    $vehicle->vin = empty($o->vin)?'ОТСУТСТВУЕТ':$o->vin;
                    $vehicle->document_name = '';
                    $vehicle->document_serial = '';
                    $vehicle->document_number = '';
                    $vehicle->dk_number = '';

                    $vehicle->client()->associate($client);
                    $vehicle->save();

                    $vehicles = [];
                    $vehicles[] = $vehicle;

                    $driver = new Driver();

                    $driver->name = $client->legal_name;
                    $driver->date_birth = $client->date_birth;
                    $driver->kbm = 1.0;
                    $driver->client()->associate($client);
                    $driver->save();

                    $drivers_sync = [];
                    array_push($drivers_sync, $driver->id);*/
                    /*$client = new Client();

                    $client->last_name = mb_convert_case($o->familiya, MB_CASE_TITLE, 'UTF-8');*/
//                        $periods = \Carbon\Carbon::createFromFormat('d.m.Y - d.m.Y',$o->srok_deystviya);
//                        dd($periods);
                    /*foreach ($periods as $date) {
//                            dd($date);
                    }*/
//                        $dates = $periods->toArray();
//                        dd($dates);
                    $policy = new Policy();
//                        $policy->sign_date = \Carbon\Carbon::parse($o->data_oformleniya)->format('d.m.Y');
                    $policy->sign_date = \Carbon\Carbon::parse($o->data_oformleniya)->format('d.m.Y');
//                        $policy->time_to = $o->srok_deystviya;
                    $static = explode('-', $o->srok_deystviya);

                    $policy->date_from = \Carbon\Carbon::parse($static[0])->format('d.m.Y');
                    $policy->date_to = \Carbon\Carbon::parse($static[1])->format('d.m.Y');
//                    dd($policy->date_to);
//                    $policy->policy_date = \Carbon\Carbon::parse($o->srok_deystviya)->format('d.m.Y');
                    $policy->notes = $o->produkt;
                    $policy->email = $o->status;
//                        $policy->first_name = mb_convert_case($o->fio_strakhovatelya, MB_CASE_TITLE, 'UTF-8');
                    $policy->p_total = mb_convert_case($o->premiya, MB_CASE_TITLE, 'UTF-8');
//                        $policy->time_from = '00:00';
//                        $policy->date_to = $o->data_okonchaniya_dogovora->format('d.m.Y');
//                        $policy->time_to = '24:00';
//                        $policy->sign_date = $o->data_zaklyucheniya_dogovora->format('d.m.Y');

                    /*$policy->p_base = 4118;
                    $policy->p_k1 = 1.0;
                    $policy->p_k2 = 1.0;
                    $policy->p_k3 = 1.0;
                    $policy->p_k4 = 1.0;
                    $policy->p_k5 = 1.0;
                    $policy->p_k6 = 1.0;
                    $policy->p_k7 = 1.0;
                    $policy->p_k8 = 1.0;*/

                    /*$policy->policy_serial = $o->dogovora;
                    $policy->policy_number = str_replace('XXX','',$o->nomer_dogovora);
                    $max_receipt_number = Policy::all()->max('receipt_number');
                    if(!$max_receipt_number){
                        $max_receipt_number = '1711116';
                    }*/
//                        $policy->receipt_number = (int)$max_receipt_number + 1;
//                        $policy->unrestricted = false;
//                        $policy->policy_serial = 'XXX';
                    $policy->policy_number = $o->dogovora;
//                        $policy->policy_number = $o->dogovora;
                    $policy->company_name = $o->strakhovaya_kompaniya;
                    $policy->full_address = $o->region;
                    $policy->passport_number = $o->tip_dogovora;
                    $policy->agent_name = $o->agent;
                    $policy->created_by = $o->subagent;
//                        $policy->owner_company = false;
//                        $policy->same_client_owner = true;
//                        $policy->setOwnerData($client);

//                        $policy->p_total = $o->itogovaya_summa;

                    $policy->client()->associate($client);
//                        $policy->vehicle()->associate($vehicle);
//                        dd($policy);
                    $policy->save();

//                        $policy->drivers()->sync($drivers_sync);
//                    }
                }
            }

            return back()->with('success', 'Excel Data Imported successfully.');

        }

        flash()->success('Policies has been imported successfully.');

        return redirect('online/policies');

    }
}
