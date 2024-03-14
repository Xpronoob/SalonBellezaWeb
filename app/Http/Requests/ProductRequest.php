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
            'product_name' => 'required|max:255',
            'product_description' => 'required',
            'stock_quantity' => 'required|integer|min:0',
            'purchase_price' => 'required|numeric|min:0',
            'selling_price' => 'required|numeric|min:0|gte:purchase_price',
            'categoria' => 'required|integer',
            'proveedor' => 'required|integer',
        ];
    }
    public function messages(): array
    {
        return [
            'product_name.required' => 'El nombre del producto es requerido',
            'product_description.required' => 'La descripcion es requerida',
            
            'stock_quantity.required' => 'La cantidad en stock es requerida',
            'purchase_price.required' => 'El precio de compra de requerido',
            'selling_price.required' => 'El precio de venta es requerido',
            'categoria.required' => 'La categoria es requerida',
            'proveedor.required' => 'El proveedor es requerido'
        


        ];
    }
}
