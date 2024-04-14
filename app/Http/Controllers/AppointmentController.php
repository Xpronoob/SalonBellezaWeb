<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentRequest;
use App\Models\Appointment;
use Illuminate\Http\Request;


class AppointmentController extends Controller
{

    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $appointments = Appointment::all();

        $appointments = Appointment::where('description', 'LIKE', '%' . $busqueda . '%')
            ->paginate(5);

        return view('appointment.index', compact('appointments', 'busqueda'));
    }


    //Metodo para crear:

    public function create()
    {
        return view('appointment.create');
    }

    public function store(AppointmentRequest $request)
    {
        try {
            Appointment::create($request->validated());

            return redirect('/citas')->with('success', 'Cita creada correctamente.');
        } catch (\Exception $e) {
            return redirect('/citas')->with('error', 'Hubo un problema al guardar los datos.');
        }
    }
    public function show(Appointment $appointment)
    {
        //
    }

    public function edit(string $id)
    {
        $appointment = Appointment::find($id);
        return view('appointment.edit', compact('appointment'));
    }

    public function update(AppointmentRequest $request, $id_appointment)
    {
        try {

            $appointment = Appointment::find($id_appointment);
            $appointment->update($request->validated());

            return redirect('/citas')->with('success', 'Cita actualizada correctamente.');
        } catch (\Exception $e) {
            return redirect('/citas')->with('error', 'Hubo un problema al actualizar los datos.');
        }
    }
    public function destroy($id_appointment)
    {
        try {
            $appointments = Appointment::findOrFail($id_appointment);
            $appointments->delete();
            return redirect('/citas')->with('deleted', 'Se eliminó correctamente.');
        } catch (\Exception $e) {
            return redirect('/citas')->with('deleted', 'Hubo un problema al eliminar los datos.');
        }
    }
}