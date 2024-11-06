<?php

namespace App\Services;

use App\Models\EmployeeJob;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;
use App\Enums\UploadDiskEnum;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Contracts\Repositories\EmployeeJobRepository;
use App\Base\Interface\Uploads\CustomUploadValidation;
use App\Base\Interface\Uploads\ShouldHandleFileUpload;
use App\Http\Requests\EmployeJobRequest;

class EmployeeJobService
{
    use UploadTrait;

    private EmployeeJobRepository $employeeJobRepository;

    public function __construct(EmployeeJobRepository $employeeJobRepository)
    {
        $this->employeeJobRepository = $employeeJobRepository;
    }

    public function store(EmployeJobRequest $request): array|bool
    {
        return DB::transaction(function () use ($request) {
            $data = $request->validated();

            return $data;
        });
    }

    public function update(Request $request, EmployeeJob $employeeJob): array|bool
    {
        return DB::transaction(function () use ($request, $employeeJob) {
            $data = $request->validated();

            return false;
        });
    }
}
