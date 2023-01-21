<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manutencao;

class ManutencaoController extends Controller
{
    public function cadastrarManutencao(Request $request) {
        return Manutencao::cadastrarManutencao($request);
    }
}
