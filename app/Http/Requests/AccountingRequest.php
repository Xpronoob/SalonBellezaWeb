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

            'amount' => 'required|numeric|min:1',

            'movement_date' => 'required|date',
            'movement_type' => 'required|max:255',

            'transaction_type' => 'required|max:255',

            'pending_balance' => 'required|numeric|min:0',
            'starting_amount' =>
            [
                'required',
                'numeric',
                'min:0',
                function ($attribute, $value, $fail) {
                    if ($value <= $this->input('pending_balance')) {
                        $fail('El saldo inicial debe ser mayor que el saldo pendiente.');
                    }
                },
            ],
        ];
    }
    public function messages(): array
    {
        return [
            'movement_description.required' => 'La descripción del movimiento es requerida.',
            'movement_description.max' => 'La descripción no puede tener más de :max caracteres.',

            'amount.required' => 'La cantidad es requerida.',
            'amount.numeric' => 'La cantidad debe ser un número.',
            'amount.min' => 'La cantidad debe ser mayor a 0.',

            'movement_date.required' => 'La fecha es requerida.',
            'movement_type.required' => 'El tipo de movimiento es requerido.',

            'transaction_type.required' => 'El tipo de transacción es requerido.',

            'pending_balance.required' => 'El saldo pendiente es requerido.',
            'pending_balance.numeric' => 'El saldo pendiente debe ser un número.',
            'pending_balance.min' => 'El saldo pendiente debe ser mayor o igual a 0.',

            'starting_amount.required' => 'El saldo inicial es requerido.',
            'starting_amount.numeric' => 'El saldo inicial debe ser un número.',
            'starting_amount.min' => 'El saldo inicial debe ser mayor o igual a 0.'
        ];
    }
}
