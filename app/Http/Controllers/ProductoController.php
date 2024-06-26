<?php


namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Category;
use App\Models\ErrorLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class ProductoController extends Controller
{
    public function index(Request $request)
    {
        //$products = Producto::all();

        $busqueda = $request->busqueda;

        $products = Product::whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($busqueda) . '%'])
            ->orWhereRaw('LOWER(description) LIKE ?', ['%' . strtolower($busqueda) . '%'])
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
            $imageUrl = null; // Inicializar la variable de URL de imagen como nula

            // Verificar si se ha proporcionado una imagen
            if ($request->hasFile('image')) {
                // Cargar la imagen a Cloudinary
                $cloudinaryResponse = Cloudinary::upload($request->file('image')->getRealPath());

                // Obtener la URL segura de la imagen cargada desde Cloudinary
                $imageUrl = $cloudinaryResponse->getSecurePath();
            }

            // Guardar los datos del producto en la base de datos
            Product::create([
                'name' => $request->name,
                'description' => $request->description,
                'stock' => $request->stock,
                'purchase_price' => $request->purchase_price,
                'selling_price' => $request->selling_price,
                'id_category' => $request->id_category,
                'id_supplier' => $request->id_supplier,
                'image' => $imageUrl // Guardar la URL de la imagen
            ]);

            return redirect('admin/inventario/productos')->with('success', 'Producto creado correctamente.');
        } catch (\Throwable $e) {
            // Guardar el error en la base de datos
            ErrorLog::create([
                'exception' => get_class($e),
                'error_message' => $e->getMessage(),
                'user_id' => auth()->id()
            ]);

            return redirect('admin/inventario/productos')->with('error', 'Hubo un problema al guardar los datos.');
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

            // Actualizar los campos del producto con los datos validados del formulario
            $product->name = $request->name;
            $product->description = $request->description;
            $product->stock = $request->stock;
            $product->purchase_price = $request->purchase_price;
            $product->selling_price = $request->selling_price;
            $product->id_category = $request->id_category;
            $product->id_supplier = $request->id_supplier;

            // Verificar si se ha proporcionado una nueva imagen
            if ($request->hasFile('image')) {
                // Cargar la nueva imagen a Cloudinary
                $cloudinaryResponse = Cloudinary::upload($request->file('image')->getRealPath());

                // Obtener la URL segura de la nueva imagen cargada desde Cloudinary
                $imageUrl = $cloudinaryResponse->getSecurePath();

                // Actualizar la URL de la imagen en la base de datos
                $product->image = $imageUrl; // Guardar la URL en lugar de la ruta local
            }

            $product->save();

            return redirect('admin/inventario/productos')->with('success', 'Producto actualizado correctamente.');
        } catch (\Throwable $e) {
            // Guardar el error en la base de datos
            ErrorLog::create([
                'exception' => get_class($e),
                'error_message' => $e->getMessage(),
                'user_id' => auth()->id()
            ]);
            return redirect('admin/inventario/productos')->with('error', 'Hubo un problema al actualizar los datos.');
        }
    }


    public function destroy($id_product)
    {
        try {
            $products = Product::findOrFail($id_product);
            $products->delete();
            return redirect('admin/inventario/productos')->with('deleted', 'Se eliminó correctamente.');
        } catch (\Exception $e) {
            return redirect('admin/inventario/productos')->with('deleted', 'Hubo un problema al eliminar los datos.');
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
