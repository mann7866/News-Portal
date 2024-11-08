<?php
namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\SubjectInterface;
use App\Traits\EloquentTrait;
use App\Models\Subject;

class SubjectRepository extends BaseRepository implements SubjectInterface
{
    use EloquentTrait;
    public function __construct(Subject $model)
    {
        $this->model = $model;
    }
}
