<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
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
            'title' => 'required|string|max:255|unique:services,title',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:1',
            'is_active' => 'nullable|boolean:',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Xizmat nomi talab qilinadi.',
            'title.unique' => 'Bu xizmat nomi allaqachon mavjud.',
            'price.required' => 'Narx talab qilinadi.',
            'price.min' => 'Narx 0 dan katta bo\'lishi kerak.',
            'is_active.required' => 'Faollik holati talab qilinadi.',
        ];
    }
}
