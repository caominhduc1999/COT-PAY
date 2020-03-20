<?php

namespace App\Http\Requests\Backend\Shop;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
            'password_old'  =>  'required',
            'password'  =>  'required|min:8',
            'passwordConfirmation'  =>  'required|same:password',
        ];
    }

    public function messages()
    {
        return [
          //
        ];
    }
}
