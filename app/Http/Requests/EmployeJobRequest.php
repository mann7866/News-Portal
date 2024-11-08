<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EmployeJobRequest extends FormRequest
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
            'jobs' => ['required','max:250',Rule::unique('employee_jobs', 'jobs')->ignore($this->EmployeeJob)],
            'employmentStatus' => ['required', 'max:250', 'in:staff,guru'],

        ];
    }
    public function messages(): array
    {
        return [
            'jobs.required' => 'Pekerjaan harus diisi.',
            'jobs.unique' => 'Pekerjaan yang anda masukkan sudah tersedia.',
            'jobs.max' => 'Pekerjaan tidak boleh lebih dari 250 karakter.',
            'employmentStatus.required' => 'Status Pekerjaan harus diisi.',
            'employmentStatus.max' => 'Status Pekerjaan tidak boleh lebih dari 250 karakter.',
        ];
    }
}
