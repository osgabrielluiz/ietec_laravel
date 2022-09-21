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

Route::get('/quem_somos', function (){
    return view('/layouts/quem somos');
});

Route::get('/relatorio', function () {
    return view('/relatorio');
});

Route::get('/login', function () {
    return view('/relatorio');
})->name('login');

Route::get('/modelo', function (){
    return view('/layouts/modelo');
})->name('modelo');