<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'name' => 'required|max:250',
            'jobs' => 'required|max:250',
            'e-mail' => 'required|max:250',
            'phone-number' => 'required',
            'educational-background' => 'required|max:250',
            'description' => 'required',
            'skill' => 'required',
            'address' => 'required',
            'image' => ['mimes:png,jpg,jpeg,webp', 'max:3048','nullable', $this->method() == 'PUT' ? 'nullable' : 'required'],

        ];
    }

        public function messages(): array
    {
        return [
            'name.required' => 'Judul harus diisi.',
            'jobs.required' => 'Judul harus diisi.',
            'name.max' => 'Judul tidak boleh lebih dari 250 karakter.',
            'phone-number.required' => 'Judul harus diisi.',
            'e-mail.required' => 'Judul harus diisi.',
            'educational-background.required' => 'Judul harus diisi.',
            'educational-background.max' => 'Judul tidak boleh lebih dari 250 karakter.',
            'description.required' => 'Deskripsi harus diisi.',
            'skill.required' => 'Deskripsi harus diisi.',
            'address.required' => 'Deskripsi harus diisi.',
            'image.required' => 'Gambar harus diunggah.',
            'image.mimes' => 'Gambar harus berupa file dengan format: png, jpg, jpeg, atau webp.',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 3 MB.',
        ];
    }
}
