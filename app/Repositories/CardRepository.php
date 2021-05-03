<?php

namespace App\Repositories;

use App\Models\Card;
use App\Repositories\Contracts\CardRepositoryInterface;

class CardRepository implements CardRepositoryInterface
{
    private $model;

    public function __construct(Card $model)
    {
        $this->model = $model;
    }

    public function allCards(): array
    {
        return $this->model::with('tipo', 'materiais', 'professores', 'curso', 'status')->get()->groupBy('status.status')->sortByDesc('dt_registro')->toArray();
    }
    public function getCardById(int $idCard): array
    {
        return $this->model::with('tipo', 'materiais', 'professores', 'curso', 'status')->where('card.id_card', $idCard)->firstOrFail()->toArray();
    }

    public function getCards(array $data): array
    {
        $results = Card::query()->with('tipo', 'materiais', 'professores', 'curso', 'status');

        if ($data['cursos'])
            $results = $results->whereIn('id_curso', $data['cursos']);

        return $results->get()->groupBy('status.status')->sortByDesc('dt_registro')->toArray();
    }
}
