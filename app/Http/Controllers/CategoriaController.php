<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Http\Requests\CreateCategoriaController;
use Illuminate\Http\Request;

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
        $request->request->add(['ativo' => true ]);

        if(!Categoria::create($request->all())){
            return view('categorias.create', array('error' => 'Não foi possível salvar a Categoria', 'old' => $request->all()));
        }

        return redirect('categorias');
    }

    public function edit($id){
        $categoria = Categoria::find($id);

        return view('categoria.edit', array('categoria' => $categoria));
    }

    public function update(Request $request, $id){
        $categoria = Categoria::find($id);

        $categoria->fill($request->all());

        $categoria->save();

        return redirect('categorias');
    }

    public function destroy($id){

        $categoria = Categoria::find($id);

        $categoria->ativo = false;

        $categoria->save();

        return redirect('categorias');
    }
}
