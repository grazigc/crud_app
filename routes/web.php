<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Cadastrar', function () {
    return view('Cadastrar');
});

Route::get('/MeuPerfil', function () {
    return view('MeuPerfil');
});

Route::get('/welcome', function () {
    return view('welcome');
});
