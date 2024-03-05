<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierStoreRequest extends FormRequest
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

            'provider_name' => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            //
        ];
    }
    public function messages(): array
    {
        return [
            'provider_name.required' => 'El nombre del proveedor es requerido',
            'contact_number.required' => 'El número de contacto es requerido',
            'email.required' => 'El correo electrónico es requerido',
            'address.required' => 'La dirección es requerida',

            'email.email' => 'El correo necesita un @'
        ];
    }
}
