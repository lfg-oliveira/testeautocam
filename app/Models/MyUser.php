<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MyUser extends Model
{
    protected $table = 'user';
    protected $fillable = ['nome',
    'cpf',
    'telefone',
    'tipo_usuario'];
    
    public static function criarUsuario($request) {
        return MyUser::insert($request->collect()->toArray());
    }
}
