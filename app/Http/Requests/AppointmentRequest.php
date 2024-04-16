<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
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
            'location' => 'required|max:255',
            'appointment_date' => 'required|date',
            'stylist' => 'required|max:255',
            'description' => 'required|max:255',
            'cost' => 'required|numeric|min:0',
            'id_user' => 'required|integer',



        ];
    }
    public function messages(): array
    {
        return [
            'location.required' => 'La locación es requerida',
            'location.max' => 'La locación no puede tener más de :max caracteres.',

            'appointment_date.required' => 'La fecha es requerida',

            'stylist.required' => 'El nombre del estilista es requerido',
            'stylist.max' => 'El nombre del estilista no puede tener más de :max caracteres.',

            'description.required' => 'La descripción es requerida',
            'description.max' => 'La descripción no puede tener más de :max caracteres.',

            'cost.required' => 'El costo es requerido',
            'cost.numeric' => 'La cantidad debe ser un número.',
            'id_user.required' => 'El nombre es requerido',


        ];
    }
}
