<?php

namespace App\Http\Requests\Backend\Business;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBusinessAccountRequest extends FormRequest
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
            'name_company' =>  'required',
            'name_represent'      =>  'required',
            'email'     =>  'required|email|unique:business,email,'.$this->id.'',
            'phone'     =>  'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|size:10|unique:business,phone,'.$this->id.'',
            'address'   =>  'required|max:180',
            'tax_code'   =>  'required',
            'image'     =>  'nullable|image',
            'city'      =>  'nullable',
            'district'  =>  'nullable',
            'ward'      =>  'nullable',
        ];
    }
}
