<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Mail extends FormRequest
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
            "name" => "required|max:100",
            'number' => "required|max:12",
        ];
    }
    public function messages()
    {
        return [
            'name.required' =>  'Введите имя',
            'number.required' =>  'Введите номер телефона',

        ];
    }
}
