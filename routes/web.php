<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testroute', function () {
    Mail::to(users: 'mailtrap.club@gmail.com')->send(new \App\Mail\MyTestEmail());
});

Route::get('/cadastro', function(){
    return view('cadastro');
});

Route::get('/login', function(){
    return view('login');
});
