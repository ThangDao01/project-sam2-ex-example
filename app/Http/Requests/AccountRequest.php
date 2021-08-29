<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
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
            //
            'FirstName' => 'required',
            'LastName' => 'required',
            'Email' => 'required',
            'password' => 'required',
            'password_confirmation' =>'required|confirmed|min:8',
            'Age' => 'required',
            'Phone' => 'required',
            'Role' => 'required',
            'Status' => 'required',
        ];
    }
}
