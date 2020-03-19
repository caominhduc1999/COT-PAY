<?php

namespace App\Http\Requests\Backend\Shop;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateShopRequest extends FormRequest
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
            'name_shop' =>  'required',
            'name'      =>  'required',
            'email'     =>  'required|email|unique:shops,email,'.$this->id.'',
            'phone'     =>  'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|size:10',
            'address'   =>  'required|max:180',
            'image'     =>  'nullable|image',
            'city'      =>  'nullable',
            'district'  =>  'nullable',
            'ward'      =>  'nullable',
        ];
    }

    public function messages()
    {
        return [
          //
        ];
    }
}
