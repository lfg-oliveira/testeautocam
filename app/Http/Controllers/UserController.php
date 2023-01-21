<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyUser as User;

class UserController extends Controller
{
    public function criarUsuario(Request $request) {
        return User::criarUsuario($request);
    }
}
