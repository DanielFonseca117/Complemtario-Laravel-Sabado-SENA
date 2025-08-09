<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return "hola ....";
});

Route::get('/contactos/{nombre?}', function ($nombre='Default') {
    return "hola $nombre";
});

Route::get('/producto', function () {
    return view('almacen.producto', ['nombre' => 'Impresora LX300', 'marca' => 'HP']);
});

Route::get('/condicional/{nota}', function ($nota) {
    return view('estructuras.condicional',compact('nota'));
});

Route::get('/switch/{dia}', function ($dia) {
    return view('estructuras.switch',compact('dia'));
});

Route::get('/while/{numero}', function ($numero) {
    return view('estructuras.while',compact('numero'));
});

Route::get('/foreach', function () {
    $lista = ['Peras','Manzanas','Naranjas','Limones'];
    return view('estructuras.foreach',compact('lista'));
});

Route::get('/app', function () {
    return view('app');
});