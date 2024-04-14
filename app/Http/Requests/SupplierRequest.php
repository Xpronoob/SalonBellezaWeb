<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierRequest extends FormRequest
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
    public function rules(): array
    {
        return [

            'name' => 'required|string|max:255',
            'number' => 'required|integer|max:12',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            //
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'El nombre del proveedor es requerido',
            'number.required' => 'El número de contacto es requerido',
            'email.required' => 'El correo electrónico es requerido',
            'address.required' => 'La dirección es requerida',
            'number.max' => 'El número de contacto no puede contener más de 12 dígitos',
            'email.email' => 'El correo electrónico debe ser válido',
            'number.integer' => 'El número de contacto no puede contener letras ni simbolos',
        ];
    }
}
