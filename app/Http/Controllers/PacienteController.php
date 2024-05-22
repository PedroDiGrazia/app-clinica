<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    public function store(Request $request)
    {
        // Validação dos dados
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'endereço' => 'required|string|max:255',
            'celular' => 'required|string|max:20',
            'senha' => 'required|string|min=6',
        ]);

        // Criação do paciente
        $paciente = Paciente::create([
            'nome' => $validated['nome'],
            'endereço' => $validated['endereço'],
            'celular' => $validated['celular'],
            'senha' => bcrypt($validated['senha']), // Armazenando a senha criptografada
        ]);

        // Retornando resposta de sucesso
        return response()->json(['message' => 'Usuário cadastrado com sucesso', 'data' => $paciente], 201);
    }
}
