<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|max:255',
            'description' => 'required',
            'stock' => 'required|integer|min:0',
            'purchase_price' => 'required|numeric|min:0',
            'selling_price' => 'required|numeric|min:0|gte:purchase_price',
            'category' => 'required|integer',
            'supplier' => 'required|integer',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'El nombre del producto es requerido',
            'description.required' => 'La descripción es requerida',
            'stock.required' => 'La cantidad en stock es requerida',
            'purchase_price.required' => 'El precio de compra es requerido',
            'selling_price.required' => 'El precio de venta es requerido',
            'category.required' => 'La categoría es requerida',
            'supplier.required' => 'El proveedor es requerido'
        ];
    }
}
