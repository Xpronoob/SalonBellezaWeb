<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class PasswordResetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }

    public function messages()
    {
        return [
            'token.required' => 'El token es requerido.',
            'email.required' => 'El correo es requerido.',
            'email.email' => 'El correo electrónico debe ser válido.',
            'password.required' => 'La contraseña es requerida.',
            'password.confirmed' => 'Las contraseñas no coinciden.'
        ];
    }
}
