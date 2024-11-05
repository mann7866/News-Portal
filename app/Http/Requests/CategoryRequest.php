<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => ['required', 'max:255', 'string', Rule::unique('categories', 'name')->ignore($this->category)]
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama kategori harus diisi.',
            'name.max' => 'Nama kategori tidak boleh lebih dari 255 karakter.',
            'name.string' => 'Nama kategori harus berupa teks.',
            'name.unique' => 'Nama kategori sudah digunakan, silakan pilih nama lain.',
        ];
    }
}
