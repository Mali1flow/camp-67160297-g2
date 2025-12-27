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
    // หน้าหลัก และ บันทึกข้อมูลใหม่
    Route::get('/pokedex', 'PokedexesController@index');  // เอา s ออกเพื่อให้ตรงกับ redirect
    Route::post('/pokedex', 'PokedexesController@store');

    // หน้าแก้ไขข้อมูล
    Route::get('/pokedex/{id}/edit', 'PokedexesController@edit');

    // เปลี่ยนจาก POST เป็น PUT ให้ตรงกับ @method('PUT') ใน Blade
    Route::put('/pokedexs/{id}', 'PokedexesController@update');

    // ลบข้อมูล
    Route::delete('/pokedex/{id}', 'PokedexesController@destroy');
});

