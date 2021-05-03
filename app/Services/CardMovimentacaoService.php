<?php

namespace App\Services;

use App\Models\Card;
use App\Repositories\Contracts\CardMovimentacaoRepositoryInterface;

class CardMovimentacaoService
{
    protected $repository;

    public function __construct(CardMovimentacaoRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function voltarUltimaMovimentacaoCard(Card $card)
    {
        return $this->repository->voltarUltimaMovimentacaoCard($card);
    }
    public function ultimaMovimentacaoCard(Card $card)
    {
        return $this->repository->ultimaMovimentacaoCard($card);
    }
}
