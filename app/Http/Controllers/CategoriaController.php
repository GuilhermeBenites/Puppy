<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Http\Requests\CreateCategoriaController;

class CategoriaController extends Controller
{
    public function index(){

        $categorias = Categoria::all();

        return view('categoria.index', array('categorias' => $categorias));
    }

    public function create(){
        return view('categoria.create');
    }

    public function store(CreateCategoriaController $request){
        if(!Categoria::create($request->all())){
            return view('categorias.create', array('error' => 'Não foi possível salvar a Categoria', 'old' => $request->all()));
        }

        return redirect('categorias');
    }

    
}
