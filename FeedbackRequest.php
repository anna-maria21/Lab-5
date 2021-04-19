<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => 'required|min:3|max:15',
            'email' => 'required|email',
            'phone' => 'required|regex:/^(\+38)?0\d{9}$/',
            'subject' => 'required|min:3|max:30',
            'message' => 'required|min:10|max:200'
        ];
    }
    public function messages() {
        return [
            'name.required' => "Ім'я є обов'язковим полем.",
            'name.min' => "Ім'я занадто коротке.",
            'name.max' => "Ім'я занадто довге.",
            'email.required' => "Еmail є обов'язковим полем.",
            'email.email' => "Еmail введено невірно.",
            'phone.required' => "Телефон є обов'язковим полем.",
            'phone.regex' => "Телефон введено невірно.",
            'subject.required' => "Тема є обов'язковим полем.",
            'subject.min' => "Тема занадто коротка.",
            'subject.max' => "Тема занадто довга.",
            'message.required' => "Повідомлення є обов'язковим полем.",
            'message.min' => "Повідомлення занадто коротке.",
            'message.max' => "Повідомлення занадто довге."
        ];
    }
}
