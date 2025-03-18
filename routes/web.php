<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',"DestinosController@webpage_principal");


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::post('Charter', "CharterController@store")->name("Charter_post");

Route::post('Informacion', "InformacionController@store")->name("Informacion_post");