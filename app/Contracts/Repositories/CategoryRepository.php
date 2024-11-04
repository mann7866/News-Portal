<?php
namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\CategoryInterface;
use App\Traits\EloquentTrait;
use App\Models\Category;

class CategoryRepository extends BaseRepository implements CategoryInterface
{
    use EloquentTrait;
    public function  __construct(Category $model)
    {
        $this->model = $model;
    }
        
}