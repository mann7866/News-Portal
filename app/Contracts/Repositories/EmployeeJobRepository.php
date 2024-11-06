<?php
namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\EmployeeJobInterface;
use App\Traits\EloquentTrait;
use App\Models\EmployeeJob;

class EmployeeJobRepository extends BaseRepository implements EmployeeJobInterface
{
    use EloquentTrait;
    public function  __construct(EmployeeJob $model)
    {
        $this->model = $model;
    }

}
