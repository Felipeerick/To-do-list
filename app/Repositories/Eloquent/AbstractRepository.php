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

    public function createRequest($request)
    {
        return $this->model->create($request);
    }

    public function delete()
    {
        return $this->model->delete();
    }

    public function findID($id)
    {
        return $this->model->find($id);
    }

    protected function getModel()
    {
        return app($this->model);
    } 
}