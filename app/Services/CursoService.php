<?php

namespace App\Services;

use App\Repositories\Contracts\CursoRepositoryInterface;

class CursoService
{
    protected $repository;

    public function __construct(CursoRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function listAll()
    {
        return $this->repository->listAllCourse();
    }
}
