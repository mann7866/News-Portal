<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class SubjectRequest extends FormRequest
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
            'description' => 'required',
            'subject' => ['required', 'max:255', 'string', Rule::unique('subjects', column: 'subject')->ignore($this->Subject)]
        ];
    }

    public function messages(): array
    {
        return [
            'description.required' => 'Deskripsi harus diisi.',
            'subject.required' => 'Mata Pelajaran kategori harus diisi.',
            'subject.max' => 'Mata Pelajaran kategori tidak boleh lebih dari 255 karakter.',
            'subject.string' => 'Mata Pelajaran kategori harus berupa teks.',
            'subject.unique' => 'Mata Pelajaran kategori sudah digunakan, silakan pilih Mata Pelajaran lain.',
        ];
    }
}
