<?php

namespace App\Http\Services;

use App\Comanda;
use App\ComandaDescricao;
use App\Http\Controllers\ComandaDescricaoController;

class ComandaService
{
    public static function detalhada($comanda) {

        $comandaId = $comanda->id;

        $data = [];

        $data['comanda'] = Comanda::where('comandas.id',$comandaId)
        ->join('users as u','u.id','comandas.cliente')->get();
        $data['produtos'] = ComandaDescricao::where('comanda_descricao.comanda',$comandaId)
        ->join('produtos as p','p.id','comanda_descricao.produtos')
        ->get();

        return $data;
    }

    public static function total($comandaId) {
    }
}
