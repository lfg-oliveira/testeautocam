<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maquinas extends Model
{
    protected $fillable = ['nome', 'ano_fabricacao'];
    public static function cadastrarMaquina($request) {
        return Maquinas::insert($request->collect()->toArray());
    }
}
