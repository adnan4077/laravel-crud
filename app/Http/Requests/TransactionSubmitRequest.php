<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionSubmitRequest extends FormRequest
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
        return [
            'start_date' =>  'required',
            'end_date' =>   'required',
            'first_name' =>  'required',
            'last_name' =>   'required',
            'email' =>       'required|email',
            'telnumber' =>   'required|numeric',
            'address1' =>   'required',
            'city' =>        'required',
            'country' =>     'required',
            'postcode' =>    'required',
            'product_name' =>'required',
            'cost' =>        'required',
            'currency' =>    'required',
            'transaction_date' =>'required'
        ];
    }
}
