<?php
namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\NewsInterface;
use App\Traits\EloquentTrait;
use App\Models\News;

class NewsRepository extends BaseRepository implements NewsInterface
{
    use EloquentTrait;
    public function __construct(News $model)
    {
        $this->model = $model;
    }
}

