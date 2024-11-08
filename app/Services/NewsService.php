<?php

namespace App\Services;

use App\Models\News;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\Auth;
use App\Base\Interface\Uploads\CustomUploadValidation;
use App\Base\Interface\Uploads\ShouldHandleFileUpload;
use App\Enums\UploadDiskEnum;
use App\Http\Requests\NewsRequest;

class NewsService implements ShouldHandleFileUpload, CustomUploadValidation
{
    use UploadTrait;

    public function validateAndUpload(string $disk, object $file, string $old_file = null): string
    {
        if ($old_file) $this->remove($old_file);

        return $this->upload($disk, $file);
    }

    public function store(NewsRequest $request): array
    {
        $data = $request->validated();
        $data['user_id'] = Auth::id();
        $data['image'] = $this->upload(UploadDiskEnum::NEWS_IMAGE->value, $request->file('image'));
        unset($data['category_ids']);

        return $data;
    }


    public function update(NewsRequest $request, News $news): array
    {
        $data = $request->validated();
        $data['user_id'] = Auth::id();

        if ($request->hasFile('image')) {
            $data['image'] = $this->validateAndUpload(UploadDiskEnum::NEWS_IMAGE->value,$request->file('image'),$news->image);
        } else {
            $data['image'] = $news->image;
        }
        unset($data['category_ids']);

        return $data;
    }
}
