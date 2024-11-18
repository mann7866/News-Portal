<?php
namespace App\Contracts\Repositories;
use App\Contracts\Interfaces\EmployeeInterface;
use App\Traits\EloquentTrait;
use App\Models\Employee;

class EmployeeRepository extends BaseRepository implements EmployeeInterface
{
    use EloquentTrait;

    public function __construct(Employee $model)
    {
        $this->model = $model;
    }
}
