<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataSupportRequest extends FormRequest
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
            'values' => 'required',
            'color' => 'required',
            'words_en' => 'required',
            'video' => 'required',
            'voice_en' => 'required',
            'images' => 'required',
            'key' => 'required'
        ];
    }
}
