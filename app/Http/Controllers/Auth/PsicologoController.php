<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use App\Models\Psicologo; // Importe a model Secretaria, se ainda não tiver feito isso

class PsicologoController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Inertia\Response
     */
    public function create_register()
    {
        return Inertia::render('Auth/PsicologoRegister');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store_register(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'registropsi' => 'required|string|max:255|unique:psicologo',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Create a new secretaria
        $psicologo = Psicologo::create([
            'name' => $request->name,
            'registropsi' => $request->registropsi,
            'password' => Hash::make($request->password),
        ]);

        // Fire the Registered event
        event(new Registered($psicologo));

        // Autenticar o usuário
        Auth::guard('psicologo')->login($psicologo);
        // Redirect to the home page
        return redirect()->route('dashboard_secretaria');
    }

}

