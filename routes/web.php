<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/zoo/home', '/zoo/index');
Route::view('/zoo/instalaciones', '/zoo/instalaciones');
Route::view('/zoo/form', '/zoo/form');
Route::view('/zoo/registrar_visita', '/zoo/registrar_visita');
Route::view('/zoo/servicios', '/zoo/servicios');


