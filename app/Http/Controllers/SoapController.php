<?php

namespace App\Http\Controllers;

use App\Policy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use SoapClient;
use SoapHeader;


class SoapController extends Controller
{

    public function formYourself(Request $request)
    {

        $vehicles = new SoapClient('https://b2b-test2.alfastrah.ru/cxf/partner/OSAGOlists?wsdl');

        if ($request->method() == 'POST') {

            $listModel = [
                'listModel' => [
                    'login' => 1,
                    'is_eosago' => true,
                    'minOccurs' => '0',
                    'markId' => $request->input('id'),
                ],
            ];
            $models = $vehicles->__soapCall('listModel', $listModel);
            return View::make('includes.car_model', compact('models'));

        }

        $listMark = [

            'listMark' => [
                'login' => 1,
                'is_eosago' => true,

            ],
        ];
        $marks = $vehicles->__soapCall('listMark', $listMark);


        $soap = new SoapClient('https://b2b-test2.alfastrah.ru/msrv/OsagoProlongation?wsdl');
        /*$osagoCalc = [
            'OsagoCalc' => [
                'contractSeries' => '',
                'contractNumber' => '',
                'birthDate' => '',
                'transportInsurer' => ''
            ],
            'OsagoSave' => [
                'calcId' => '',
                'partnerEmail' => '',
                'partnerPhone' => '',
            ],
            'OsagoGetStatus' => [
                'contractId' => '',
                '*contractNumber' => '',
                'statusName' => '',
            ]
        ];*/

        $sh_param = array(
            'Username' => null,
            'Password' => null
        );
        $header = new SoapHeader('osag',
            'http://alfastrah.ru/ws/osago-prolongation-service',
            $sh_param,1);
        $soap->__setSoapHeaders($header);

//        dd($soap->__soapCall('OsagoCalc', $osagoCalc));


        //  dd($soap->__getFunctions());
        return view('osago_form_yourself', compact('marks'));
    }

    /*public function store(Request $request){
        $insurer_info = Policy::query()->updateOrCreate([
            'insurant_name' => $request->input('insurant_name'),
            'insurant_birthday' => $request->input('insurant_birthday'),
            'insurant_passport' => $request->input('insurant_passport'),
            'insurant_passport_date' => $request->input('insurant_passport_date'),
            'insurant_passport_by' => $request->input('insurant_passport_by'),
            'insurant_address' => $request->input('insurant_address'),
            'owner_name' => $request->input('owner_name'),
            'owner_birthday' => $request->input('owner_birthday'),
            'owner_passport' => $request->input('owner_passport'),
            'owner_passport_date' => $request->input('owner_passport_date'),
            'owner_passport_by' => $request->input('owner_passport_by'),
            'owner_address' => $request->input('owner_address'),
            'driver_name' => $request->input('driver_name'),
            'driver_birthday' => $request->input('driver_birthday'),
            'driver_license_date' => $request->input('driver_license_date'),
            'driver_license' => $request->input('driver_license'),
            'driver_exp_start' => $request->input('driver_exp_start'),
            'car_mark' => $request->input('car_mark'),
            'cal_model' => $request->input('cal_model'),
            'car_number' => $request->input('car_number'),
            'car_vin' => $request->input('car_vin'),
            'car_ph' => $request->input('car_ph'),
            'car_year' => $request->input('car_year'),
            'doc_type' => $request->input('doc_type'),
            'car_doc_number' => $request->input('car_doc_number'),
            'car_doc_date' => $request->input('car_doc_date'),
            'insurance_start' => $request->input('insurance_start'),
        ]);
    }*/


}
