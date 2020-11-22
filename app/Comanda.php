<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    protected $table = 'comandas';

    protected $fillable = [
        'user',
        'total',
        'created_at'
    ];

    public function users(){
        return $this->hawMany('App\User');
    }

    public function comandaDescricao(){
        return $this->belongsTo('App\ComandaDescricao');
    }


}
