<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Policy;
use Illuminate\Support\Facades\Input;

class StorePolicyRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'time_from' => 'required',
            'date_from' => 'required|date',
            'time_to' => 'required',
            'date_to' => 'required|date|after:date_from',
            'client.full_address' => 'required',
            'client.cell_phone' => 'required',
            'client.email' => 'email',
            //
        ];

        if(!$this->request->get('client')['is_company']){
            $rules['client.last_name'] = 'required';
            $rules['client.first_name'] = 'required';
            $rules['client.middle_name'] = 'required';
            $rules['client.date_birth'] = 'required|date';
            $rules['client.passport_serial'] = 'required';
            $rules['client.passport_number'] = 'required';
        }else{
            $rules['client.company_name'] = 'required';
            $rules['client.company_inn'] = 'required';
        }

        if(!$this->request->get('same_client_owner')){
            if(!$this->request->get('owner_company')){
                $rules['last_name'] = 'required';
                $rules['first_name'] = 'required';
                $rules['middle_name'] = 'required';
                $rules['date_birth'] = 'required|date';
                $rules['passport_serial'] = 'required';
                $rules['passport_number'] = 'required';
            }else{
                $rules['owner_company_name'] = 'required';
                $rules['owner_company_inn'] = 'required';
            }

            $rules['full_address'] = 'required';
            $rules['cell_phone'] = 'required';
            $rules['email'] = 'email';
        }
        
        $rules['vehicle.type'] = 'required';
        $rules['vehicle.make'] = 'required';
        $rules['vehicle.model'] = 'required';
        $rules['vehicle.year'] = 'required|digits:4';
        $rules['vehicle.power'] = 'required';
        //$rules['vehicle.sign'] = 'required';
        $rules['vehicle.vin'] = 'required';
        $rules['vehicle.document_name'] = 'required';
        $rules['vehicle.document_serial'] = 'required';
        $rules['vehicle.document_number'] = 'required';

        foreach($this->request->get('drivers') as $key => $val)
        {
            if(!empty($val['name']) && !$this->request->get('unrestricted')){
                $rules['drivers.'.$key.'.date_birth'] = 'required|date';
                $rules['drivers.'.$key.'.kbm'] = 'required|numeric';
                $rules['drivers.'.$key.'.exp'] = 'required|digits:4';
                $rules['drivers.'.$key.'.driver_license'] = 'required';
            }

        }

        $rules['p_base'] = 'required|numeric';
        $rules['p_k1'] = 'required|numeric';
        $rules['p_k2'] = 'required|numeric';
        $rules['p_k3'] = 'required|numeric';
        $rules['p_k4'] = 'required|numeric';
        $rules['p_k5'] = 'required|numeric';
        $rules['p_k6'] = 'required|numeric';
        $rules['p_k7'] = 'required|numeric';
        $rules['p_k8'] = 'required|numeric';
        $rules['p_total'] = 'required|numeric';

        $rules['policy_serial'] = 'required';
        $rules['policy_number'] = 'required|size:10|unique:policies,policy_number,'.$this->request->get('id');
        $rules['receipt_number'] = 'required|unique:policies,receipt_number,'.$this->request->get('id');


        return $rules;
    }
}
