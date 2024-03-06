<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    //Metodo para crear:
    public function store(Request $request)
    {
        // Validación
        $validatedData = $request->validate([
            'service_title' => 'required|string|max:255',
            'description' => 'required|string',
            'image_url' => 'required|string',
        ]);

        // Creación del servicio
        $service = new Service;
        $service->service_title = $validatedData['service_title'];
        $service->description = $validatedData['description'];
        $service->image_url = $validatedData['image_url'] ?? null; // Uso del operador null coalescente por si acaso no se proporciona una URL
        $service->save();

        // Redirección
        return redirect()->back()->with('success', 'Servicio creado con éxito.');
    }


    //Método Update:

    public function update(Request $request, $id_service)
    {
        $service = Service::find($id_service);
        $service->service_title = $request->input('service_title');
        $service->description = $request->input('description');
        $service->image_url = $request->input('image_url');
        $service->update();
        return redirect()->back();
    }

    //metodo para borrar:
    public function destroy($id_service)
    {
        $service = Service::findOrFail($id_service);
        $service->delete();
        return redirect()->back();
    }
}
