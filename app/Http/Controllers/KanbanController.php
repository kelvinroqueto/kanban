<?php

namespace App\Http\Controllers;

use App\Services\CursoService;
use App\Services\CardService;

class KanbanController extends Controller
{

    protected $cursoService;
    protected $cardService;
    public function __construct(CursoService $cursoService, CardService $cardService)
    {
        $this->cursoService = $cursoService;
        $this->cardService = $cardService;
    }

    function index()
    {
        $coursesList = $this->cursoService->listAll();
        $cardsList = $this->cardService->all();
        $data['cardsList'] = $cardsList;
        $html = view('kanban.layouts.cards', $data);

        $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');
        return view('kanban.index', compact('coursesList', 'cardsList'));
    }
}
