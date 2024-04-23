<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentRequest;
use App\Models\Appointment;
use App\Models\User;

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

    public function indexClient(Request $request)
    {
        $user = auth()->user();
        $userId = $user->id;
        $userNew = User::find($userId);
        $busqueda = $request->busqueda;

        $appointments = $userNew->appointments()
            ->where('description', 'LIKE', '%' . $busqueda . '%')
            ->paginate(5);

        return view('profile.appointments', compact('appointments', 'busqueda'));
    }


    //Metodo para crear:

    public function create()
    {
        $users = User::all();

        return view('appointment.create', compact('users'));
        //return view('appointment.create');

    }

    public function store(AppointmentRequest $request)
    {
        try {
            Appointment::create($request->validated());

            return redirect('admin/gestion/citas')->with('success', 'Cita creada correctamente.');
        } catch (\Exception $e) {
            return redirect('admin/gestion/citas')->with('error', 'Hubo un problema al guardar los datos.');
        }
    }
    public function show(Appointment $appointment)
    {
        //
    }

    public function edit(string $id)
    {

        $appointment = Appointment::find($id);
        $users = User::all();
        return view('appointment.edit', compact('appointment', 'users'));
    }

    public function update(AppointmentRequest $request, $id_appointment)
    {
        try {

            $appointment = Appointment::find($id_appointment);
            $appointment->update($request->validated());

            return redirect('admin/gestion/citas')->with('success', 'Cita actualizada correctamente.');
        } catch (\Exception $e) {
            return redirect('admin/gestion/citas')->with('error', 'Hubo un problema al actualizar los datos.');
        }
    }
    public function destroy($id_appointment)
    {
        try {
            $appointments = Appointment::findOrFail($id_appointment);
            $appointments->delete();
            return redirect('admin/gestion/citas')->with('deleted', 'Se eliminó correctamente.');
        } catch (\Exception $e) {
            return redirect('admin/gestion/citas')->with('deleted', 'Hubo un problema al eliminar los datos.');
        }
    }

    public function destroyAppointment($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();

        return redirect()->route('appointments')->with('deleted', 'Cita eliminada correctamente');
    }
}
