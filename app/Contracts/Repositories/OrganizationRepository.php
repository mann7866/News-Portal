<?php
namespace App\Contracts\Repositories;

use App\Models\organization;
use App\Traits\EloquentTrait;
use App\Contracts\Interfaces\OrganizationInterface;

class OrganizationRepository extends BaseRepository implements OrganizationInterface
{
    use EloquentTrait;
public function __construct(organization $model)
{
$this->model = $model;
}

}

