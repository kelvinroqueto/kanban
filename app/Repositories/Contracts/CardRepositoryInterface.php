<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface CardRepositoryInterface
{
    public function allCards(): Array;
    public function getCardById(int $idCard): Array;
    public function getCards(array $data): Array;
}
