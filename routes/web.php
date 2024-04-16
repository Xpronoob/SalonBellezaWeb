<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Models\Supplier;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CategoryController;
use App\Models\Service; // Importa el modelo Service si aún no lo has hecho
use App\Http\Controllers\AccountingController;
use App\Http\Controllers\AppointmentController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    $services = Service::all(); // Recupera todos los servicios desde la base de datos
    $proveedores = Supplier::all(); // Recupera todos los proveedores desde la base de datos

    return view('vistaUsuario', ['services' => $services, 'proveedores' => $proveedores]);
});

Route::middleware(['auth', 'verified', 'role:admin'])->prefix('admin')->group(function () {
    // Inventario
    Route::prefix('inventario')->group(function () {
        Route::resource('productos', ProductoController::class);
        Route::resource('categorias', CategoryController::class);
        Route::resource('proveedores', SupplierController::class);
    });

    // Gestion
    Route::prefix('gestion')->group(function () {
        Route::resource('citas', AppointmentController::class);
        Route::resource('servicios', ServiceController::class);
        Route::resource('contabilidad', AccountingController::class);
    });

    // Otros
    Route::get('/dashboard', function () {
        return view('index');
    });
});


// Route::get('/vistaUsuario', function () {
//     $services = Service::all(); // Recupera todos los servicios desde la base de datos
//     $proveedores = Supplier::all(); // Recupera todos los proveedores desde la base de datos

//     return view('vistaUsuario', ['services' => $services, 'proveedores' => $proveedores]);
// });


Route::get('/vistaCalculadora', function () {
    return view('vistaCalculadora');
});


// Route::get('/dashboard', function () {
//     return view('index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
