<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return view('supplier.index', compact('suppliers'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            //Creamos un objeto:
            $suppliers = new Supplier;

            //Datos del formulario:
            $suppliers->provider_name = $request->input('provider_name');
            $suppliers->contact_number = $request->input('contact_number');
            $suppliers->email = $request->input('email');
            $suppliers->address = $request->input('address');

            //Guardamos los datos en la base de datos con el método save.
            $suppliers->save();

            //Redireccionamos hacia atrás:
            return redirect()->back();
        } catch (\Exception $e) {
            // Manejo de la excepción aquí
            return redirect()->back()->with('error', 'Hubo un problema al guardar los datos.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        //
    }
}
