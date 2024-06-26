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
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\MailController;

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
    $services = Service::take(4)->get(); // Recupera solo los primeros 4 servicios desde la base de datos
    $proveedores = Supplier::all(); // Recupera todos los proveedores desde la base de datos

    return view('vistaUsuario', ['services' => $services, 'proveedores' => $proveedores]);
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('appointments', [AppointmentController::class, 'indexClient'])->name('appointments');
    Route::delete('appointments/{id}', [AppointmentController::class, 'destroyAppointment'])->name('appointments.destroy');
});


// Route::get('/citas', function () {
//     $services = Service::take(4)->get(); // Recupera solo los primeros 4 servicios desde la base de datos
//     $proveedores = Supplier::all(); // Recupera todos los proveedores desde la base de datos

//     return view('appointments', ['services' => $services, 'proveedores' => $proveedores]);
// });


Route::post('/send-mail', [MailController::class, 'maildata'])->name('send_mail');

Route::middleware(['auth', 'verified', 'role:admin'])->prefix('admin')->group(function () {
    // Admin
    Route::prefix('administracion')->group(function () {
        Route::get('errors', [ErrorController::class, 'index'])->name('admin.errors.index');
    });

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
        Route::get('/vistaCalculadora', function () {
            return view('vistaCalculadora');
        })->name('calculadora.index');
    });

    // Otros
    Route::get('/dashboard', function () {
        return view('index');
    });
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
