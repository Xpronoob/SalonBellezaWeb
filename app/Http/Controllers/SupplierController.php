<?php

namespace App\Http\Controllers;

use App\Http\Requests\SupplierStoreRequest;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(Request $request)
    {
        $busqueda=$request -> busqueda;
        $suppliers = Supplier::all();
        $suppliers = Supplier::where('provider_name','LIKE','%'.$busqueda.'%')
        ->paginate(5);

        return view('supplier.index', compact('suppliers','busqueda'));
    }

    public function create()
    {
        return view('supplier.create');
    }

    public function store(SupplierStoreRequest $request)
    {

        try {
            // $suppliers = new Supplier;
            // $suppliers->provider_name = $request->input('provider_name');
            // $suppliers->contact_number = $request->input('contact_number');
            // $suppliers->email = $request->input('email');
            // $suppliers->address = $request->input('address');

            // $suppliers->save();

            Supplier::create($request->validated());

            return redirect('/proveedores')->with('success', 'Proveedor creado correctamente.');
        } catch (\Exception $e) {
            return redirect('/proveedores')->with('error', 'Hubo un problema al guardar los datos.');
        }
    }

    public function show(Supplier $supplier)
    {
        //
    }

    public function edit(string $id)
    {
        $supplier = Supplier::find($id);
        return view('supplier.edit', compact('supplier'));
    }

    public function update(SupplierStoreRequest $request, $id_supplier)
    {

        // Validar la solicitud
        // $validatedData = $request->validate([
        //     'provider_name' => 'required|string|max:255',
        //     'contact_number' => 'required|string|max:20',
        //     'email' => 'required|email|max:255',
        //     'address' => 'required|string|max:255',
        // ]);

        try {

            $supplier = Supplier::find($id_supplier);
            $supplier->update($request->validated());
            // $suppliers = Supplier::find($id_supplier);

            // $suppliers->provider_name = $request->input('provider_name');
            // $suppliers->contact_number = $request->input('contact_number');
            // $suppliers->email = $request->input('email');
            // $suppliers->address = $request->input('address');
            // $suppliers->update();

            return redirect('/proveedores')->with('success', 'Proveedor actualizado correctamente.');
        } catch (\Exception $e) {
            return redirect('/proveedores')->with('error', 'Hubo un problema al actualizar los datos.');
        }
    }


    public function destroy($id_supplier)
    {
        try {
            $suppliers = Supplier::findOrFail($id_supplier);
            $suppliers->delete();
            return redirect('/proveedores')->with('deleted', 'Se eliminó correctamente.');
        } catch (\Exception $e) {
            return redirect('/proveedores')->with('deleted', 'Hubo un problema al eliminar los datos.');
        }
    }
}
