<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AppointmentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Rotas protegidas pelo middleware de autenticação do Sanctum
Route::middleware('auth:sanctum')->group(function () {
    // Rotas de agendamentos
    Route::get('/appointments', [AppointmentController::class, 'index']); // Listar todos os agendamentos

    Route::post('/appointments', [AppointmentController::class, 'store']); // Criar um novo agendamento

    Route::get('/appointments/{id}', [AppointmentController::class, 'show']); // Exibir um agendamento específico

    Route::put('/appointments/{id}', [AppointmentController::class, 'update']); // Atualizar um agendamento existente
    
    Route::delete('/appointments/{id}', [AppointmentController::class, 'destroy']); // Excluir um agendamento existente
});
