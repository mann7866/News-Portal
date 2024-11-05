<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'title' => 'required|max:250',
            'category_id' => 'required',
            'description' => 'required',
            'image' => ['mimes:png,jpg,jpeg,webp', 'max:3048', $this->method() == 'PUT' ? 'nullable' : 'required'],
            'start_date' => 'nullable',
            'end_date' => 'nullable|after_or_equal:start_date',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Judul harus diisi.',
            'title.max' => 'Judul tidak boleh lebih dari 250 karakter.',
            'category_id.required' => 'Kategori harus dipilih.',
            'description.required' => 'Deskripsi harus diisi.',
            'image.required' => 'Gambar harus diunggah.',
            'image.mimes' => 'Gambar harus berupa file dengan format: png, jpg, jpeg, atau webp.',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 3 MB.',
            'start_date.nullable' => 'Tanggal mulai tidak wajib diisi.',
            'end_date.nullable' => 'Tanggal selesai tidak wajib diisi.',
            'end_date.after_or_equal' => 'Tanggal selesai harus setelah atau sama dengan tanggal mulai.',
        ];
    }
}
