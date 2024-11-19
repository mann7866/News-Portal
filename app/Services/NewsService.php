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

    public function filterAndSearch(array $filters)
    {
        $query = News::query();

        if (!empty($filters['search'])) {
            $query->where('title', 'like', '%' . $filters['search'] . '%')
                ->orWhere('description', 'like', '%' . $filters['search'] . '%')
                ->orWhereHas('user', function ($q) use ($filters) {
                    $q->where('name', 'like', '%' . $filters['search'] . '%');
                })
                ->orWhereHas('categories', function ($q) use ($filters) {
                    $q->where('name', 'like', '%' . $filters['search'] . '%');
                });
        }

        $query->orderBy('created_at', 'desc');

        return $query->paginate(9);
    }

    public function store(NewsRequest $request): array
    {
        $data = $request->validated();
        $data['user_id'] = Auth::id();
        $data['status'] = 'daily';

        if ($request->hasFile('image')) {
            $data['image'] = $this->upload(UploadDiskEnum::NEWS_IMAGE->value, $request->file('image'));
        }

        $categoryIds = $data['category_ids'] ?? [];
        unset($data['category_ids']);

        return [
            'data' => $data,
            'category_ids' => $categoryIds,
        ];
    }

    public function update(NewsRequest $request, News $news): array
    {
        $data = $request->validated();
        $data['user_id'] = Auth::id();

        if ($request->hasFile('image')) {
            $data['image'] = $this->validateAndUpload(UploadDiskEnum::NEWS_IMAGE->value, $request->file('image'), $news->image);
        } else {
            $data['image'] = $news->image;
        }

        $categoryIds = $data['category_ids'] ?? [];
        unset($data['category_ids']);

        return [
            'data' => $data,
            'category_ids' => $categoryIds,
        ];
    }
}
