<?php

namespace App\Services;

use App\Models\News;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;
use App\Enums\UploadDiskEnum;
use App\Http\Requests\NewsRequest;
use Illuminate\Support\Facades\Auth;
use App\Contracts\Repositories\NewsRepository;
use App\Base\Interface\Uploads\CustomUploadValidation;
use App\Base\Interface\Uploads\ShouldHandleFileUpload;

class NewsService implements ShouldHandleFileUpload, CustomUploadValidation
{
    use UploadTrait;

    private NewsRepository $newsRepository;

    public function __construct(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    public function validateAndUpload(string $disk, object $file, string $old_file = null): string
    {
        if ($old_file) $this->remove($old_file);

        return $this->upload($disk, $file);
    }

    public function store(Request $request): array|bool
    {
        $data = $request->validated();
        $data['user_id'] = Auth::id();
        $data['image'] = $this->upload(UploadDiskEnum::NEWS_IMAGE->value, $request->file('image'));

        $storedNews = $this->newsRepository->store($data);

        return $storedNews ? $storedNews->toArray() : false;
    }

    public function update(NewsRequest $request, News $news): array|bool
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
