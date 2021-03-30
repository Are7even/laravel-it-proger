<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name'=>'required',
            'email' => 'required|email',
            'message' => 'required|min:10|max:50',
            'subject' => 'required|min:10|max:50',
        ];
    }

    public function attributes() // Для смены имени аттрибутов в выводе ошибок
    {
        return [
            'name' => 'your name',
        ];
    }

    public function messages() // Для смены текста ошибки
    {
        return [
            'name.required' => 'Field name is required!', // "имя аттрибута.имя ошибки" => "Новый текст"
        ];
    }

}
