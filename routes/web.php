<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PsicologoController;
use App\Http\Controllers\SecretariaController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\FormularioController;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
require __DIR__.'/auth.php';

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/agendamentos', [PacienteController::class,'agendamentos_page'])->name('agendamentos');
Route::get('/agendamentos/agenda', [PacienteController::class,'agendar_page']);
Route::post('/agendar', [PacienteController::class, 'agendar'])->name('agendar');


Route::get('/psicologo', [PsicologoController::class, 'index']);
Route::get('/paciente', [PacienteController::class, 'agendar']);
Route::get('/secretaria', [SecretariaController::class, 'index']);

Route::get('/anotacao/{id}', [PsicologoController::class, 'anotacao'])->name('anotacao');
Route::post('/nova-anotacao/{id}', [PsicologoController::class, 'store'])->name('nova-anotacao');
Route::put('/update-ficha/{id}', [PsicologoController::class, 'updateFicha'])->name('update-ficha');

Route::post('/api/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/download-atestado', [DownloadController::class, 'downloadDocxAtestado'])->name('download.atestado');
Route::get('/download-encaminhamento', [DownloadController::class, 'downloadDocxEncaminhamento'])->name('download.encaminhamento');

Route::get('/formulario', [FormularioController::class, 'exibirFormulario'])->name('formulario');
Route::post('/enviar-email', [FormularioController::class, 'enviarEmail'])->name('enviar.email');

Route::get('/formulario', function () {
    return view('formulario');
});

//Route::post('/enviar-email', [ContactController::class, 'sendEmail']);

