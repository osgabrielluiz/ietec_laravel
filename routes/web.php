<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('IETEC');
});

Route::get('/teste', function () {
    return view('teste');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/quem somos', function (){
    return view('/layouts/quem somos');
});

Route::get('/relatorio', function () {
    return view('/relatorio');
});