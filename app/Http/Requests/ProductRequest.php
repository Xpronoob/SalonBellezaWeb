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
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'image' => 'image',
            'stock' => 'required|integer|min:0',
            'purchase_price' => 'required|numeric|min:0',
            'selling_price' => [
                'required',
                'numeric',
                'min:0',
                function ($attribute, $value, $fail) {
                    if ($value <= $this->input('purchase_price')) {
                        $fail('El precio de venta debe ser mayor que el precio de compra.');
                    }
                },
            ],
            'id_category' => 'required|integer',
            'id_supplier' => 'required|integer',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El nombre del producto es requerido',
            'name.max' => 'El nombre del producto no puede tener más de :max caracteres.',
            'description.required' => 'La descripción es requerida',
            'description.max' => 'La descripción no puede tener más de :max caracteres.',
            'image.image' => 'La imagen debe tener la extensión jpg, jpeg, png, bmp, gif, svg, o webp',
            'stock.required' => 'La cantidad en stock es requerida',
            'stock.min' => 'La cantidad en stock debe ser mayor o igual a 0',
            'purchase_price.required' => 'El precio de compra es requerido',
            'purchase_price.min' => 'El precio de compra debe ser mayor o igual a 0',
            'purchase_price.numeric' => 'El campo precio de compra debe ser un número.',
            'selling_price.required' => 'El precio de venta es requerido',
            'selling_price.min' => 'El precio de venta debe ser mayor o igual a 0',
            'selling_price.numeric' => 'El campo precio de venta debe ser un número.',
            'id_category.required' => 'La categoría es requerida',
            'id_supplier.required' => 'El proveedor es requerido',
        ];
    }
}
