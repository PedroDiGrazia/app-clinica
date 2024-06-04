<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::paginate(10);
        return response()->json($appointments);
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'user_id' => 'required|integer',
            // Adicione outras regras de validação conforme necessário
        ]);

        $appointment = Appointment::create($request->all());
        return response()->json($appointment, 201);
    }

    public function show($id)
    {
        $appointment = Appointment::findOrFail($id);
        return response()->json($appointment);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'date' => 'required|date',
            'user_id' => 'required|integer',
            // Adicione outras regras de validação conforme necessário
        ]);

        $appointment = Appointment::findOrFail($id);
        $appointment->update($request->all());

        return response()->json($appointment, 200);
    }

    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();

        return response()->json(null, 204);
    }
}
