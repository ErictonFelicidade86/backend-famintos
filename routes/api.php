<?php

use App\Http\Controllers\ComandasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {
    Route::resources([
        '/users' => 'UsersController',
        '/comandas' => 'ComandasController',
        '/produtos' => 'ProdutosController',
        '/categorias' => 'CategoriasController',
        '/descricao' => 'ComandaDescricaoController'
        ]);

    Route::get('/comandas/{id}/detalhes','ComandasController@detalhes');
    Route::get('/combos','CategoriasController@combos');
    Route::get('/pizza','CategoriasController@pizza');
    Route::get('/sanduishe','CategoriasController@sanduishe');
    Route::get('/bebidas','CategoriasController@bebidas');

});
