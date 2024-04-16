<?php

namespace App\Http\Controllers;

use App\Models\ErrorLog;
use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function index(Request $request)
    {

        $busqueda = $request->busqueda;

        $products = ErrorLog::where('exception', 'LIKE', '%' . $busqueda . '%')
            ->orWhere('error_message', 'LIKE', '%' . $busqueda . '%')
            ->paginate(5);

        $errors = ErrorLog::all();
        return view('errors.index', compact('errors', 'busqueda'));
    }
}
