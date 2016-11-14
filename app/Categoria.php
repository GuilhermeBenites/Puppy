<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Categoria extends Model
{
    protected $fillable = ['nome'];

    static function all($columns = ['*'])
    {
        return DB::table('categorias')->where('ativo', '=', true)->get();
    }
}
