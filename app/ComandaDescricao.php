<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComandaDescricao extends Model
{
    protected $table = 'comanda_descricao';

    protected $fillable = [
        'comanda',
        'created_at',
        'produtos',
        'quantidade'
    ];

    public function produtos(){
        return $this->belongsTo('App\Produto');
    }

    public function comanda(){
        return $this->belongsTo('App\Comanda');
    }
}
