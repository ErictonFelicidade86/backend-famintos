<?php

namespace App\Http\Controllers;

use App\ComandaDescricao;
use Illuminate\Http\Request;

class ComandaDescricaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ComandaDescricao::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return ComandaDescricao::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ComandaDescricao  $comandaDescricao
     * @return \Illuminate\Http\Response
     */
    public function show(ComandaDescricao $comandaDescricao)
    {
        return $comandaDescricao;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ComandaDescricao  $comandaDescricao
     * @return \Illuminate\Http\Response
     */
    public function edit(ComandaDescricao $comandaDescricao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ComandaDescricao  $comandaDescricao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComandaDescricao $comandaDescricao)
    {
        $comandaDescricao->update($request->all());
        return $comandaDescricao;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ComandaDescricao  $comandaDescricao
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComandaDescricao $comandaDescricao)
    {
        $comandaDescricao->delete();
        return $comandaDescricao;
    }
}
