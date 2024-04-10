<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountingRequest;
use App\Models\Accounting;
use Illuminate\Http\Request;


class AccountingController extends Controller
{

    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $accountings = Accounting::all();
        $totalPendingBalance = Accounting::sum('pending_balance');
        $accountings = Accounting::where('movement_description', 'LIKE', '%' . $busqueda . '%')
            ->orWhere('movement_type', 'LIKE', '%' . $busqueda . '%')
            ->paginate(5);

        return view('accounting.index', compact('accountings', 'busqueda', 'totalPendingBalance'));
    }


    //Metodo para crear:

    public function create()
    {
        return view('accounting.create');
    }

    public function store(AccountingRequest $request)
    {
        try {
            Accounting::create($request->validated());

            return redirect('/contabilidad')->with('success', 'Registro creado correctamente.');
        } catch (\Exception $e) {
            return redirect('/contabilidad')->with('error', 'Hubo un problema al guardar los datos.');
        }
    }
    public function show(Accounting $accounting)
    {
        //
    }

    public function edit(string $id)
    {
        $accounting = Accounting::find($id);
        return view('accounting.edit', compact('accounting'));
    }

    public function update(AccountingRequest $request, $id_accounting)
    {
        try {

            $accounting = Accounting::find($id_accounting);
            $accounting->update($request->validated());

            return redirect('/contabilidad')->with('success', 'Registro actualizada correctamente.');
        } catch (\Exception $e) {
            return redirect('/contabilidad')->with('error', 'Hubo un problema al actualizar los datos.');
        }
    }
    public function destroy($id_accounting)
    {
        try {
            $categories = Accounting::findOrFail($id_accounting);
            $categories->delete();
            return redirect('/contabilidad')->with('deleted', 'Se eliminó correctamente.');
        } catch (\Exception $e) {
            return redirect('/contabilidad')->with('deleted', 'Hubo un problema al eliminar los datos.');
        }
    }
}
