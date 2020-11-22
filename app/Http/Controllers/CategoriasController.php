<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index()
    {
        return Categoria::all();
    }

    public function store(Request $request)
    {
        return Categoria::create($request->all());
    }

    public function show(Categoria $categoria)
    {
        return $categoria;
    }

    public function update(Request $request, Categoria $categoria)
    {
        $categoria->update($request->all());
        return $categoria;
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return $categoria;
    }

    public function combos(){
        $categoria = Categoria::join('produtos as p', 'p.categoria','categorias.id')
        ->where('categorias.id','1')->get();
        return $categoria;
    }

    public function pizza(){
        $categoria = Categoria::join('produtos as p', 'p.categoria','categorias.id')
        ->where('categorias.id','2')->get();
        return $categoria;
    }
    public function sanduishe(){
        $categoria = Categoria::join('produtos as p', 'p.categoria','categorias.id')
        ->where('categorias.id','3')->get();
        return $categoria;
    }
    public function bebidas(){
        $categoria = Categoria::join('produtos as p', 'p.categoria','categorias.id')
        ->where('categorias.id','4')->get();
        return $categoria;
    }
}
