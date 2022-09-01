<?php

namespace App\Repositories\Contract;

interface RepositoryInterface
{
    public function all();

    public function createRequest($request);

    public function delete();
} 