<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maquinas;
class MaquinaController extends Controller
{
    public function cadastrarMaquina(Request $request) {
        return Maquinas::cadastrarMaquina($request);
    }
}
