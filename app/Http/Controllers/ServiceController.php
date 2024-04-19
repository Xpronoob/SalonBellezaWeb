<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $busqueda = $request->busqueda;

        $services = Service::where('title', 'LIKE', '%' . $busqueda . '%')
            ->orWhere('description', 'LIKE', '%' . $busqueda . '%')
            ->paginate(5);

        return view('service.index', compact('services', 'busqueda'));
    }

    public function create()
    {
        return view('service.create');
    }
    // $input = $request->all();

    // if ($image_url = $request->file('image_url')) {
    //     $destinationPath = 'image_url/';
    //     $profileImage = date('YmdHis') . "." . $image_url->getClientOriginalExtension();
    //     $image_url->move($destinationPath, $profileImage);
    //     $input['image_url'] = "$profileImage";
    // }
    // Service::create($request->validated());


    // public function store(ServiceRequest $request)
    // {
    //     try {
    //         // Hacer una solicitud HTTP para cargar la imagen a tu nueva aplicación
    //         $response = Http::attach(
    //             'image',
    //             file_get_contents($request->file('image')->path()),
    //             $request->file('image')->getClientOriginalName()
    //         )->post('https://utopia-salon.com/upload');

    //         // Obtener la URL de la imagen desde la respuesta
    //         $imageUrl = $response->body();

    //         // Guardar la URL de la imagen en tu base de datos
    //         $service = new Service();
    //         $service->title = $request->title;
    //         $service->description = $request->description;
    //         $service->image = $imageUrl; // Guardar la URL en lugar de la ruta local
    //         $service->save();

    //         return redirect('admin/gestion/servicios')->with('success', 'Servicio creado correctamente.');
    //     } catch (\Exception $e) {
    //         return redirect('admin/gestion/servicios')->with('error', 'Hubo un problema al guardar los datos.');
    //     }
    // }

    public function store(ServiceRequest $request)
    {
        try {
            // Verificar si se ha proporcionado una imagen
            if ($request->hasFile('image')) {
                // Cargar la imagen a Cloudinary
                $cloudinaryResponse = Cloudinary::upload($request->file('image')->getRealPath());

                // Obtener la URL segura de la imagen cargada desde Cloudinary
                $imageUrl = $cloudinaryResponse->getSecurePath();
            } else {
                // Si no se proporciona una imagen, establecer la URL como nula
                $imageUrl = null;
            }

            // Guardar la URL de la imagen en tu base de datos
            $service = new Service();
            $service->title = $request->title;
            $service->description = $request->description;
            $service->image = $imageUrl; // Guardar la URL en lugar de la ruta local
            $service->save();

            return redirect('admin/gestion/servicios')->with('success', 'Servicio creado correctamente.');
        } catch (\Exception $e) {
            return redirect('admin/gestion/servicios')->with('error', 'Hubo un problema al guardar los datos.');
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

    // public function update(ServiceRequest $request, $id_service)
    // {
    //     try {
    //         $service = Service::find($id_service);

    //         // Actualizar los campos del servicio con los datos validados del formulario
    //         $service->title = $request->title;
    //         $service->description = $request->description;

    //         // Verificar si se ha proporcionado una nueva imagen
    //         if ($request->hasFile('image')) {
    //             // Hacer una solicitud HTTP para cargar la nueva imagen a tu nueva aplicación
    //             $response = Http::attach(
    //                 'image',
    //                 file_get_contents($request->file('image')->path()),
    //                 $request->file('image')->getClientOriginalName()
    //             )->post('https://utopia-salon.com/upload');

    //             // Obtener la URL de la nueva imagen desde la respuesta
    //             $imageUrl = $response->body();

    //             // Actualizar la URL de la imagen en la base de datos
    //             $service->image = $imageUrl; // Guardar la URL en lugar de la ruta local
    //         }

    //         $service->save();

    //         return redirect('admin/gestion/servicios')->with('success', 'Servicio actualizado correctamente.');
    //     } catch (\Exception $e) {
    //         return redirect('admin/gestion/servicios')->with('error', 'Hubo un problema al actualizar los datos.');
    //     }
    // }

    public function update(ServiceRequest $request, $id_service)
    {
        try {
            $service = Service::find($id_service);

            // Actualizar los campos del servicio con los datos validados del formulario
            $service->title = $request->title;
            $service->description = $request->description;

            // Verificar si se ha proporcionado una nueva imagen
            if ($request->hasFile('image')) {
                // Cargar la nueva imagen a Cloudinary
                $cloudinaryResponse = Cloudinary::upload($request->file('image')->getRealPath());

                // Obtener la URL segura de la nueva imagen cargada desde Cloudinary
                $imageUrl = $cloudinaryResponse->getSecurePath();

                // Actualizar la URL de la imagen en la base de datos
                $service->image = $imageUrl; // Guardar la URL en lugar de la ruta local
            }

            $service->save();

            return redirect('admin/gestion/servicios')->with('success', 'Servicio actualizado correctamente.');
        } catch (\Exception $e) {
            return redirect('admin/gestion/servicios')->with('error', 'Hubo un problema al actualizar los datos.');
        }
    }


    public function destroy($id_service)
    {
        try {
            $services = Service::findOrFail($id_service);
            $services->delete();
            return redirect('admin/gestion/servicios')->with('deleted', 'Se eliminó correctamente.');
        } catch (\Exception $e) {
            return redirect('admin/gestion/servicios')->with('deleted', 'Hubo un problema al eliminar los datos.');
        }
    }
}
