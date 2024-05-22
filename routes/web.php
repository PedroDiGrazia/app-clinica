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

Route::post('/cadastro', function(Request $request){
    // Validar os dados do formulário
    $request->validate([
        'nome' => 'required|string|max:255',
        'endereco' => 'required|string|max:255',
        'celular' => 'required|string|max:20',
        'senha' => 'required|string|min:6',
    ]);

    // Criar um novo usuário
    $user = new User();
    $user->nome = $request->input('nome');
    $user->endereco = $request->input('endereco');
    $user->celular = $request->input('celular');
    $user->senha = bcrypt($request->input('senha')); // Salvar a senha criptografada
    $user->save();

    // Redirecionar para a página de login
    return redirect('/login')->with('success', 'Cadastro realizado com sucesso!');
});


