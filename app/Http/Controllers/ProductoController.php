<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $products = Producto::all();
        return view('product.index', compact('products'));
    }

    public function store(Request $request)
    {   
        $products = new Producto;
        $products->product_name = $request->input('product_name');
        $products->product_description = $request->input('product_description');
        $products->stock_quantity = $request->input('stock_quantity');
        $products->purchase_price = $request->input('purchase_price');
        $products->selling_price = $request->input('selling_price');
        $products->categoria = $request->input('categoria');
        $products->proveedor = $request->input('proveedor');
        $products->save();
        return redirect()->back();
    }
    
    public function update(Request $request, $id_product)
    {
            $product = Producto::find($id_product);
            $product->product_name = $request->input('product_name');
            $product->product_description = $request->input('product_description');
            $product->stock_quantity = $request->input('stock_quantity');
            $product->purchase_price = $request->input('purchase_price');
            $product->selling_price = $request->input('selling_price');
            $product->categoria = $request->input('categoria');
            $product->proveedor = $request->input('proveedor');
            $product->update();
    
            return redirect()->back();
    }
    
    public function destroy($id_product)
    {
            $product = Producto::findOrFail($id_product);
            $product->delete();
            return redirect()->back();
    }
    
}
