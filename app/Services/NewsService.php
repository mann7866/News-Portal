<?php

namespace App\Services;
use App\Models\News;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;
use App\Enums\UploadDiskEnum;
use App\Base\Interface\Uploads\CustomUploadValidation;
use App\Base\Interface\Uploads\ShouldHandleFileUpload;


class NewsService implements ShouldHandleFileUpload, CustomUploadValidation
{
    use UploadTrait;

    public function validateAndUpload(string $disk, object $file, string $old_file = null): string
    {
        if ($old_file) $this->remove($old_file);

        return $this->upload($disk, $file);
    }

    public function store(Request $request): array|bool
    {
        return [
            'title' => $request['title'],
            'description' => $request['description'],
            'image' => $this->upload(UploadDiskEnum::NEWS_IMAGE->value, $request->file('image'))
        ];
    }

    public function update(Request $request, News $news): array|bool
    {
        $old_image = $news->image;

        return [
            'title' => $request['title'],
            'description' => $request['description'],
            'image' => $request->hasFile('image')
                ? $this->validateAndUpload(UploadDiskEnum::NEWS_IMAGE->value, $request->file('image'), $old_image)
                : $old_image,
        ];
    }
}
