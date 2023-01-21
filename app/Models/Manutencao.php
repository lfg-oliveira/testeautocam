<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manutencao extends Model
{
    protected $fillable = ['titulo', 'descricao', 'user_id'];
    
    public static function cadastrarManutencao($request) {
        return Manutencao::insert($request->collect()->toArray());
    }
}
