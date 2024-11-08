<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class OrganizationRequest extends FormRequest
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
            'name' => ['required', 'max:255', 'string', Rule::unique('subjects', column: 'subject')->ignore($this->Subject)],
            'description' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama Organisasi harus diisi.',
            'name.max' => 'Nama Organisasi tidak boleh lebih dari 255 karakter.',
            'name.string' => 'Nama Organisasi harus berupa teks.',
            'name.unique' => 'Nama Organisasi yang anda masukkan sudah ada.',
            'description.required' => 'Deskripsi harus diisi.',
        ];
    }
}
