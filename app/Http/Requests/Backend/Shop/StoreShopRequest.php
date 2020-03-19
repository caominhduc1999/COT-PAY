<?php

namespace App\Http\Requests\Backend\Shop;

use Illuminate\Foundation\Http\FormRequest;

class StoreShopRequest extends FormRequest
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
            'email'     =>  'required|email|unique:shops,email',
            'password'  =>  'required|min:8',
            'passwordConfirmation'  =>  'required|min:8|same:password',
            'phone'     =>  'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|size:10',
            'address'   =>  'required|max:180',
            'image'     =>  'nullable|image',
            'city'      =>  'required',
            'district'  =>  'required',
            'ward'      =>  'required',
        ];
    }

    public function messages()
    {
        return [
            //
        ];
    }
}
