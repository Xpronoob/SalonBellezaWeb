<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view('supplier.index', compact('suppliers'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        // Validar la solicitud
        $validatedData = $request->validate([
            'provider_name' => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
        ]);

        try {
            $suppliers = new Supplier;

            $suppliers->provider_name = $request->input('provider_name');
            $suppliers->contact_number = $request->input('contact_number');
            $suppliers->email = $request->input('email');
            $suppliers->address = $request->input('address');

            $suppliers->save();

            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Hubo un problema al guardar los datos.');
        }
    }

    public function show(Supplier $supplier)
    {
        //
    }

    public function edit(Supplier $supplier)
    {
        //
    }

    public function update(Request $request, $id_supplier)
    {

        // Validar la solicitud
        $validatedData = $request->validate([
            'provider_name' => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
        ]);

        try {
            $suppliers = Supplier::find($id_supplier);

            $suppliers->provider_name = $request->input('provider_name');
            $suppliers->contact_number = $request->input('contact_number');
            $suppliers->email = $request->input('email');
            $suppliers->address = $request->input('address');
            $suppliers->update();

            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Hubo un problema al actualizar los datos.');
        }
    }


    public function destroy($id_supplier)
    {
        try {
            $suppliers = Supplier::findOrFail($id_supplier);
            $suppliers->delete();
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'No se pudo eliminar el proveedor.');
        }
    }
}
