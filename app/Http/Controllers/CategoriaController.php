<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){

        $categorias = Categoria::all();

        return view('categoria.index', array('categorias' => $categorias));
    }
}
