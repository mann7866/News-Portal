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
            'email' => 'required|max:250',
            'phoneNumber' => 'required',
            'educationalBackground' => 'required|max:250',
            'description' => 'required',
            'skill' => 'required',
            'address' => 'required',
            'image' => 'nullable', 'mimes:png,jpg,jpeg,webp', 'max:3048','nullable',

        ];
    }

        public function messages(): array
    {
        return [
            'name.required' => 'Nama harus diisi.',
            'jobs.required' => 'Jobs harus diisi.',
            'name.max' => 'Nama tidak boleh lebih dari 250 karakter.',
            'phoneNumber.required' => 'No telp harus diisi.',
            'email.required' => 'Alamat email harus diisi.',
            'educationalBackground.required' => 'Pangkat harus diisi.',
            'educationalBackground.max' => 'Pangkat tidak boleh lebih dari 250 karakter.',
            'description.required' => 'Deskripsi harus diisi.',
            'skill.required' => 'Bidang keahlian harus diisi.',
            'address.required' => 'Alamat harus diisi.',
            'image.required' => 'Gambar harus diisi.',
            'image.mimes' => 'Gambar harus berupa file dengan format: png, jpg, jpeg, atau webp.',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 3 MB.',
        ];
    }
}
