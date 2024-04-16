<?php


namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Category;

use Illuminate\Http\Request;


class ProductoController extends Controller
{
    public function index(Request $request)
    {

        //$products = Producto::all();

        $busqueda = $request->busqueda;

        $products = Product::where('name', 'LIKE', '%' . $busqueda . '%')
            ->orWhere('description', 'LIKE', '%' . $busqueda . '%')
            ->paginate(5);


        return view('product.index', compact('products', 'busqueda'));
    }

    public function create()
    {
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('product.create', compact('categories'), compact('suppliers'));
    }

    public function store(ProductRequest $request)
    {

        try {
            // dump($request->all());
            Product::create($request->validated());

            return redirect('/productos')->with('success', 'Producto creado correctamente.');
        } catch (\Exception $e) {
            return redirect('/productos')->with('error', 'Hubo un problema al guardar los datos.');
        }
    }


    public function show(Product $product)
    {
        //
    }

    public function edit(string $id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('product.edit', compact('product', 'categories', 'suppliers'));
    }

    public function update(ProductRequest $request, $id_product)
    {


        try {

            $product = Product::find($id_product);
            $product->update($request->validated());

            return redirect('/productos')->with('success', 'Producto actualizado correctamente.');
        } catch (\Exception $e) {
            return redirect('/productos')->with('error', 'Hubo un problema al actualizar los datos.');
        }
    }


    public function destroy($id_product)
    {
        try {
            $products = Product::findOrFail($id_product);
            $products->delete();
            return redirect('/productos')->with('deleted', 'Se eliminó correctamente.');
        } catch (\Exception $e) {
            return redirect('/productos')->with('deleted', 'Hubo un problema al eliminar los datos.');
        }
    }

    /*
    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $validatedData = $request->validate([
            'product_name' => 'required|max:255',
            'product_description' => 'required',
            'stock_quantity' => 'required|integer|min:0',
            'purchase_price' => 'required|numeric|min:0',
            'selling_price' => 'required|numeric|min:0|gte:purchase_price',
            'categoria' => 'required|integer',
            'proveedor' => 'required|integer',
        ]);

        // Creación del producto con datos validados
        $products = new Producto;
        $products->product_name = $validatedData['product_name'];
        $products->product_description = $validatedData['product_description'];
        $products->stock_quantity = $validatedData['stock_quantity'];
        $products->purchase_price = $validatedData['purchase_price'];
        $products->selling_price = $validatedData['selling_price'];
        $products->categoria = $validatedData['categoria'];
        $products->proveedor = $validatedData['proveedor'];
        $products->save();

        // Redirigir al usuario con un mensaje de éxito
        return redirect()->back()->with('success', 'Producto guardado con éxito.');
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
    }*/
}
