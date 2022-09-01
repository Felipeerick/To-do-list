<?php

namespace App\Repositories\Eloquent;

class AbstractRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->getModel();
    }

    public function all()
    {
        return $this->model->all();
    }

    public function create()
    {
        return $this->model->create();
    }

    public function delete()
    {
        return $this->model->delete();
    }

    protected function getModel()
    {
        return app($this->model);
    } 
}