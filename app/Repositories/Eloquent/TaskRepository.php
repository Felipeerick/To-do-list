<?php

namespace App\Repositories\Eloquent;

use App\Models\Task;
use App\Repositories\Contract\RepositoryInterface;

class TaskRepository extends AbstractRepository implements RepositoryInterface
{
    protected $model = Task::class;

}