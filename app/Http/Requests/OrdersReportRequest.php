<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Policy;
use Illuminate\Support\Facades\Input;

class OrdersReportRequest extends Request
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
            //'number_from' => 'required',
            //'number_to' => 'required',
            //
        ];
        return $rules;
    }
}
