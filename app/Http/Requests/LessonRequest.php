<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LessonRequest extends FormRequest
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

            'lesson_name' => 'required',
            'course_ID' => 'required',
            'list_material_id' => 'required',
            'data_support_values' => 'required',
            'Status' => 'required',
        ];
    }
}
