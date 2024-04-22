<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Validation\Rules\Password;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('users.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Password::min(8)->letters()->numbers()->symbols()], //Cambio sebas para que se pueda registrar con letras, 1 numero y caracter especial obligatoriamente
            'phone' => ['required', 'numeric', 'digits:8'], // Ajuste de numeros
            'terms' => [
                'accepted', // Esta regla valida que el checkbox haya sido marcado
                Rule::requiredIf(function () use ($request) {
                    // La regla es requerida si el checkbox no está marcado
                    return !$request->input('terms');
                })
            ],
        ], [
            'terms.accepted' => 'Debes aceptar los términos y condiciones.',
            'name.required' => 'El nombre es requerido',
            'email.required' => 'El correo es requerido',
            'email.email' => 'El formato del correo electrónico no es válido',
            'email.unique' => 'El correo ya ha sido tomado.',
            'password.required' => 'La contraseña es requerida',
            'password.confirmed' => 'La confirmación de contraseña no coincide',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres',
            'password.letters' => 'La contraseña debe contener al menos una letra',
            'password.symbols' => 'La contraseña debe contener al menos un símbolo', // Mensaje para símbolos
            'password.numbers' => 'La contraseña debe contener al menos un número', // Mensaje para números
            'phone.required' => 'El teléfono es requerido',
            'phone.numeric' => 'El número de teléfono solo puede contener números',
            'phone.digits' => 'El número de teléfono debe ser de :digits dígitos',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => strtolower($request->email), // Convertir a minúsculas
            'password' => Hash::make($request->password),
            'phone' => $request->phone
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
