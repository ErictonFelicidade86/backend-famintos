<?php

namespace App\Http\Controllers;

use App\Enderecos;
use Illuminate\Http\Request;

class EnderecosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Enderecos::all();
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
        return Enderecos::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Enderecos  $enderecos
     * @return \Illuminate\Http\Response
     */
    public function show(Enderecos $enderecos)
    {   
        return $enderecos;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enderecos  $enderecos
     * @return \Illuminate\Http\Response
     */
    public function edit(Enderecos $enderecos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enderecos  $enderecos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enderecos $enderecos)
    {
        $enderecos->update($request->all());
        return $enderecos;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enderecos  $enderecos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Enderecos $enderecos)
    {
        $enderecos->delete();
        return $enderecos;
    }
}
