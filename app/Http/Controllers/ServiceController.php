<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index(Request $request)
    {
        $busqueda=$request -> busqueda;
    
        $services = Service::where('title','LIKE','%'.$busqueda.'%')
        ->orWhere('description','LIKE','%'.$busqueda.'%')
        ->paginate(5);

        return view('service.index', compact('services','busqueda'));
    }

    public function create()
    {
        return view('service.create');
    }

    public function store(StoreServiceRequest $request)
    {
        try {
            Service::create($request->validated());
    
        return redirect('/servicios')->with('success', 'Servicio creado correctamente.');
    } catch (\Exception $e) {
        return redirect('/servicios')->with('error', 'Hubo un problema al guardar los datos.');
    }
    
    }
    public function show(Service $service)
    {
        //
    }


    
public function edit(string $id)
{
    $service = Service::find($id);
    return view('service.edit', compact('service'));
}

public function update(StoreServiceRequest $request, $id_service)
{


    try {

        $service = Service::find($id_service);
        $service->update($request->validated());
     

        return redirect('/servicios')->with('success', 'Servicio actualizado correctamente.');
    } catch (\Exception $e) {
        return redirect('/servicios')->with('error', 'Hubo un problema al actualizar los datos.');
    }
}

public function destroy($id_service)
{
    try {
        $services = Service::findOrFail($id_service);
        $services->delete();
        return redirect('/servicios')->with('deleted', 'Se eliminó correctamente.');
    } catch (\Exception $e) {
        return redirect('/servicios')->with('deleted', 'Hubo un problema al eliminar los datos.');
    }
}

}
