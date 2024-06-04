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
use App\Models\Secretaria; // Importe a model Secretaria, se ainda não tiver feito isso

class SecretariaController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Inertia\Response
     */
    public function create_register()
    {
        return Inertia::render('Auth/SecretariaRegister');
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
            'registrosec' => 'required|string|max:255|unique:secretaria',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Create a new secretaria
        $secretaria = Secretaria::create([
            'name' => $request->name,
            'registrosec' => $request->registrosec,
            'password' => Hash::make($request->password),
        ]);

        // Fire the Registered event
        event(new Registered($secretaria));

        // Autenticar o usuário
        Auth::guard('web')->login($secretaria);

        // Redirect to the home page
        return redirect(RouteServiceProvider::HOME);
    }
}

