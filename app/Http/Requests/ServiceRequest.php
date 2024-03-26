<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'image' => 'required|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'El título del servicio es requerido',
            'description.required' => 'La descripción del servicio es requerido',
            'image.required' => 'La URL de la imagen es requerido',
        ];
    }
}
