<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PacienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AppointmentController;


// Rotas protegidas pelo middleware de autenticação do Sanctum
Route::middleware('auth:sanctum')->group(function () {
    // Rotas de agendamentos
    Route::get('/appointments', [AppointmentController::class, 'index']); // Listar todos os agendamentos

    Route::post('/appointments', [AppointmentController::class, 'store']); // Criar um novo agendamento

    Route::get('/appointments/{id}', [AppointmentController::class, 'show']); // Exibir um agendamento específico

    Route::put('/appointments/{id}', [AppointmentController::class, 'update']); // Atualizar um agendamento existente
    
    Route::delete('/appointments/{id}', [AppointmentController::class, 'destroy']); // Excluir um agendamento existente
});

Route::post('register', [RegisteredUserController::class, 'store'])->middleware('guest');
Route::post('login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');

Route::post('agendar', [PacienteController::class, 'agendar'])->name('agendar');
Route::post('cancelar', [PacienteController::class, 'cancelar'])->name('cancelar');
Route::get('agendamentos', [PacienteController::class, 'agendamentos'])->name('agendamentos');
Route::get('agendamentos-futuros', [PacienteController::class, 'agendamentosFuturos'])->name('agendamentos-futuros');
