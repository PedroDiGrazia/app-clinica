<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\SecretariaRequest;
use App\Http\Requests\Auth\PsicologoRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

    public function create()
    {
        return Inertia::render('Auth/PsicologoLogin', [
            'canResetPassword' => Route::has('password.request'),
            'status' => session('status'),
        ]);
    }

    public function create_dashboard()
    {
        return Inertia::render('Auth/Dashboard_Psicologo');
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

    public function store(PsicologoRequest $request)
    {
        // Validate the request
        $credentials = $request->validate([
            'registropsi' => 'required|string|max:255',
            'password' => 'required|string',
        ]);

        // Attempt to authenticate the user
        if (!Auth::guard('psicologo')->attempt($credentials)) {
            throw ValidationException::withMessages([
                'registrosec' => [trans('auth.failed')],
            ]);
        }

        return redirect()->route('dashboard_psicologo');
    }

}

