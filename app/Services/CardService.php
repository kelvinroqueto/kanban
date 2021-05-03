<?php

namespace App\Services;

use App\Repositories\Contracts\CardRepositoryInterface;
use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Collection;

class CardService
{
    protected $repository;

    public function __construct(CardRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function all()
    {
        return $this->repository->allCards();
    }
    public function getById(int $idCard)
    {
        return $this->repository->getCardById($idCard);
    }

    public function get(array $data)
    {
        return $this->repository->getCards($data);
    }
}
