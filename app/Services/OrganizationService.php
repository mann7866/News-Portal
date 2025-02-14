<?php

namespace App\Services;

use App\Models\organization;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\Auth;
use App\Base\Interface\Uploads\CustomUploadValidation;
use App\Base\Interface\Uploads\ShouldHandleFileUpload;
use App\Enums\UploadDiskEnum;
use App\Http\Requests\OrganizationRequest;

class OrganizationService implements ShouldHandleFileUpload, CustomUploadValidation
{
    use UploadTrait;
    public function validateAndUpload(string $disk, object $file, string $old_file = null): string
    {
        if ($old_file) $this->remove($old_file);
        return $this->upload($disk, $file);
    }

    public function store(OrganizationRequest $request): array
    {
        $data = $request->validated();
        $data['image'] = $this->upload(UploadDiskEnum::ORGANIZATION_IMAGE->value, $request->file('image'));
        return $data;
    }


    public function update(OrganizationRequest $request, Organization $organization): array
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $data['image'] = $this->validateAndUpload(UploadDiskEnum::ORGANIZATION_IMAGE->value,$request->file('image'),$organization->image);
        } else {
            $data['image'] = $organization->image;
        }

        return $data;
    }
}
