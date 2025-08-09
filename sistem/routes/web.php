<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return "hola ....";
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



Route::get('/categoria', function () {
    return view('categoria');
});

Route::get('/contactos', function () {
    return view('contactos');
});

Route::get('/probar-conexion', function () {
    try {
        DB::connection()->getPdo();
        return ('conexion exitosa');
    } catch (Exception $e) {    
        return view('error');
    }
});

Route::get('/probar-conexion-error', function () {
    return view('probar-conexion');
});