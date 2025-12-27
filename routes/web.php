<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('template.default');
    return view('html101');
});
Route::get('/views2', function () {
    //return view('template.default');
    return view('myviews');
});
Route::get('/mycontroller', [App\Http\Controllers\MyController::class, 'index']) ;
Route::post('/mycontroller', [App\Http\Controllers\MyController::class, 'process']) ;

Route::get('/showinfo', [App\Http\Controllers\showinfo::class, 'index']) ;
Route::post('/showinfo', [App\Http\Controllers\showinfo::class, 'store']) ;

Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/pokedexs', 'PokedexesController@index');
    Route::post('/pokedexs', 'PokedexesController@store');
    Route::get('/pokedex/{id}/edit', 'PokedexesController@edit');
    Route::post('/pokedex/{id}/update', 'PokedexesController@update');
    Route::delete('/pokedex/{id}', 'PokedexesController@destroy');
});
