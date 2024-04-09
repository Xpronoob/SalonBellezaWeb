<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountingRequest extends FormRequest
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

            //
            'movement_description' => 'required|max:255',
            'amount' => 'required|numeric|min:0',
            'movement_date' => 'required|date',
            'movement_type' => 'required|max:255',
            'transaction_type' => 'required|max:255',
            'pending_balance' => 'required|numeric|min:0'
        ];
    }
    public function messages(): array
    {
        return [
           

            'movement_description.required' => 'La descripción del movimiento es requerida',
            'movement_description.max' => 'La descripción no puede tener más de :max caracteres.',

            'amount.required' => 'La cantidad es requerida',
            'amount.numeric' => 'La cantidad debe ser un número.',

            'movement_date.required' => 'La fecha es requerida',


            'movement_type.required' => 'El tipo de movimineto es requerido',

            'transaction_type.required' => 'El tipo de transacción es requerido',

            'pending_balance.required' => 'El saldo pendiente es requerido',
            'pending_balance.numeric' => 'El saldo debe ser un número.'
        ];
    }
}
