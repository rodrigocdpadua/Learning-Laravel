<?php

use Illuminate\Support\Facades\Route;

//Grupo de Rotas
Route::prefix('produto') -> group(function(){
    Route::get('/1', function(){
        return 'PRODRUTO 1';
    });

    Route::get('/2', function(){
        return 'PRODRUTO 2';
    });

    Route::get('/', function(){
        return 'PRODUTO';
    });
});

//Rotas Nomeadas
Route::get('/proibido3', function(){
    return redirect() -> route('nomeado');
});

Route::get('/name', function(){
    return 'Hey Hey Hey';
}) -> name('nomeado');

//Redirecionamento de Rotas
Route::redirect('/proibido', '/');

Route::get('/proibido2', function(){
    return redirect('/');
});

//Definir Rotas com Parâmetros não Obrigatórios
Route::get('/vinhos/{vin?}', function($vinho = ''){
    return "Vinho(s) {$vinho}";
});

//Definir Rotas com Parâmetros
Route::get('/categoria/{cat}', function($cat){
    return "Categoria: {$cat}";
});

//Definir Rotas
Route::get('/teste', function () {
    return "Testei";
});

Route::get('/testecontroller', 'Rotas\RotasController@testerotas');

Route::get('/', function () {
    return view('welcome');
});