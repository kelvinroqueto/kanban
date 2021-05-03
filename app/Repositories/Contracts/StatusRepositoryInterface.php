<?php

namespace App\Repositories\Contracts;

use App\Models\Card;

interface StatusRepositoryInterface
{
    public function getIdStatusName(String $nome);
    public function mudarStatus(Card $card);

}
