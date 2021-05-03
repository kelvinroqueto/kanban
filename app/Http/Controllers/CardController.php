<?php

namespace App\Http\Controllers;

use App\Services\CardService;
use Illuminate\Http\Request;

class CardController extends Controller
{
    protected $cardService;
    public function __construct(CardService $cardService)
    {
        $this->cardService = $cardService;
    }
    public function getCardById(int $idCard)
    {
        if ($idCard) {
            $card = $this->cardService->getById($idCard);
            $html = view('kanban.layouts.modal-content', $card);

            $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');
            return json_encode($html);
        }
        return false;
    }

    public function getCards(Request $request)
    {

        $requestData = (array) $request->all();
        $data['cardsList'] = $this->cardService->get($requestData);
        $html = view('kanban.layouts.cards', $data);
        $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');
        return json_encode($html);
    }
}
