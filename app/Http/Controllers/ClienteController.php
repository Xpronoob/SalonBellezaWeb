<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $clientes = Cliente::all();
        return view('cliente.index', compact('clientes'));

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        try {
            $clientes = new Cliente;
    
            //Datos del formulario:
            $clientes->nombre = $request->input('nombre');
            $clientes->correo = $request->input('correo');
            $clientes->telefono = $request->input('telefono');
    
            //Guardamos los datos en la base de datos con el método save.
            $clientes->save();
    
            return redirect()->back();
        } catch (\Exception $e) {

            return redirect()->back()->with('error', 'Hubo un problema al guardar los datos.');
        }
    }
    
    public function update(Request $request, $id)
    {
        try {
            $clientes = Cliente::find($id);
    
            $clientes->nombre = $request->input('nombre');
            $clientes->telefono = $request->input('telefono');
            $clientes->correo = $request->input('correo');
    
            $clientes->save();
    
            return redirect()->back();
        } catch (\Exception $e) {
            
            return redirect()->back()->with('error', 'Hubo un problema al actualizar los datos.');
        }
    }
    

    public function destroy($id)
    {
        try {
            $clientes = Cliente::find($id);
    
            // Verificar si el cliente existe
            if (!$clientes) {
                throw new \Exception('El cliente no existe.');
            }
    
            // Usamos la función eliminar
            $clientes->delete();
            
            // Redireccionamos hacia atrás:
            return redirect()->back();
        } catch (\Exception $e) {
            // Manejo de la excepción aquí
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    


    public function edit($id)
    {
    }

    public function show(Cliente $cliente)
    {
    }

}
