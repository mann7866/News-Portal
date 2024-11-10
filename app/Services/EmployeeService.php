<?php
namespace App\Services;


use App\Models\Employee;
use App\Traits\UploadTrait;
use App\Base\Interface\Uploads\CustomUploadValidation;
use App\Base\Interface\Uploads\ShouldHandleFileUpload;
use App\Enums\UploadDiskEnum;
use App\Http\Requests\EmployeeRequest;

class EmployeeService implements ShouldHandleFileUpload, CustomUploadValidation
{
    use UploadTrait;

    public function validateAndUpload(string $disk, object $file, string $old_file): string
    {
        if ($old_file) $this->remove($old_file);
        return $this->upload($disk, $file);
    }

    public function store(EmployeeRequest $request): array
    {
        $data = $request->validated();
        $data['image'] = $this->upload(UploadDiskEnum::EMPLOYEE_IMAGE->value, $request->file('image'));

        return $data;
    }
    public function update(EmployeeRequest $request, Employee $employee): array
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $this->validateAndUpload(UploadDiskEnum::EMPLOYEE_IMAGE->value,$request->file('image'),$employee->image);
        } else {
            $data['image'] = $employee->image;
        }

        return $data;
    }
}
