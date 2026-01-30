<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20|unique:clients,phone',
            'email' => 'nullable|email|max:255|unique:clients,email',
            'notes' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Mijoz ismi talab qilinadi.',
            'phone.required' => 'Telefon raqami talab qilinadi.',
            'phone.unique' => 'Bu telefon raqami allaqachon mavjud.',
            'email.email' => 'To\'g\'ri email kiriting.',
            'email.unique' => 'Bu email allaqachon mavjud.',
        ];
    }
}
