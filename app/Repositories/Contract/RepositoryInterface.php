<?php

namespace App\Repositories\Contract;

interface RepositoryInterface
{
    public function all();

    public function create();

    public function delete();
} 