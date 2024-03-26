<?php

namespace App\Http\Controllers;

use App\Http\Requests\SupplierRequest;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $suppliers = Supplier::all();
        $suppliers = Supplier::where('name', 'LIKE', '%' . $busqueda . '%')
            ->paginate(5);

        return view('supplier.index', compact('suppliers', 'busqueda'));
    }

    public function create()
    {
        return view('supplier.create');
    }

    public function store(SupplierRequest $request)
    {

        try {
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

    public function update(SupplierRequest $request, $id_supplier)
    {
        try {

            $supplier = Supplier::find($id_supplier);
            $supplier->update($request->validated());

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
