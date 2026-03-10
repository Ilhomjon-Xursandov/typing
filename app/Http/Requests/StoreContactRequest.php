<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'path'=>'required|string',
            'phone1'=>['required','regex:/^\+998[0-9]{9}$/'],
            'phone2'=>'regex:/^\+998[0-9]{9}$/',
            'phone3'=>'regex:/^\+998[0-9]{9}$/',
            'email1'=>'required|email',
            'email2'=>'email',
            'email3'=>'email',
            'telegram'=>'required|string',
            'facebook'=>'required|string',
            'instagram'=>'required|string',
        ];
    }
}
