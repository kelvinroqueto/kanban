<?php

namespace App\Http\Controllers;

use App\Services\CardService;
use App\Services\CursoService;
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
            $card = $this->cardService->getById($idCard)->toArray();
            $html = view('kanban.layouts.modal-content', $card);

            $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');
            return json_encode($html);
        }
        return false;
    }

    public function prosseguir(Request $request)
    {
        print json_encode($this->cardService->prosseguir($request->all()));

    }
    public function voltar(Request $request)
    {
        print json_encode($this->cardService->voltar($request->all()));

    }

    public function getCards(Request $request)
    {
        $requestData = (array) $request->all();
        $data['cardsList'] = $this->cardService->get($requestData);
        if (!isset($requestData['cursos'])) {
            $requestData['cursos'] = [];
        }
        if (!isset($requestData['aulas'])) {
            $requestData['aulas'] = [];
        }
        $json['num_aulas'] = $this->cardService->listClasses($requestData['cursos']);
        $html = view('kanban.layouts.cards', $data);
        $json['html'] = mb_convert_encoding($html, 'UTF-8', 'UTF-8');
        return json_encode($json);
    }
}
