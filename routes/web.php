<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/iniciarsesion', function () {
    return view('users.auth.login');
});

Route::get('/registrarse', function () {
    return view('users.auth.register');
});

Route::get('/recuperar', function () {
    return view('users.auth.resetPassword');
});

Route::get('/servicios', function () {
    return view('users.services');
});

Route::get('/productos', function () {
    return view('users.products');
});

Route::get('/citas', function () {
    return view('users.appointments');
});

Route::get('/citas/editar', function () {
    return view('users.appointmentEdit');
});


Route::prefix('admin')->group(function () {

    Route::get('/inventario', function () {
        return view('admin.inventory');
    });

    Route::get('/inventario/editar', function () {
        return view('admin.inventoryEdit');
    });

    Route::get('/productos', function () {
        return view('admin.products');
    });

    Route::get('/productos/editar', function () {
        return view('admin.productEdit');
    });

    Route::get('/citas', function () {
        return view('admin.appointments');
    });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
