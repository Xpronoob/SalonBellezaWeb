<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str; // Importar la clase Str
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    
    protected function prepareForValidation() //Metodo para que no detecte las mayusculas del email.
    {
        $this->merge([
            'email' => Str::lower($this->email), // Convertir el correo electrónico a minúsculas
        ]);
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'lowercase', 'string', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'phone' => ['required', 'numeric']
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El nombre completo es requerido.',
            'name.string' => 'El nombre debe ser una cadena de texto.',
            'name.max' => 'El nombre no puede tener más de :max caracteres.',
            'email.required' => 'El correo es requerido.',
            'email.string' => 'El correo debe ser una cadena de texto.',
            'email.email' => 'El formato del correo electrónico no es válido.',
            'email.lowercase' => 'El correo debe estar en minúsculas.',
            'email.max' => 'El correo no puede tener más de :max caracteres.',
            'email.unique' => 'El correo ya ha sido tomado.',
            'phone.required' => 'El teléfono es requerido.',
            'phone.numeric' => 'El teléfono debe ser numérico.'
        ];
    }

}
