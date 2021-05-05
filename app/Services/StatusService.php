<?php

namespace App\Services;

use App\Models\Card;
use App\Repositories\StatusRepository;

class StatusService
{
    protected $repository;

    public function __construct(StatusRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getIdStatusName(String $nome)
    {
        return $this->repository->getIdStatusName($nome);
    }

    public function mudarStatus(Card $card)
    {
        return $this->repository->mudarStatus($card);
    }

}
