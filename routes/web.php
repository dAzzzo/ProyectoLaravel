<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rutas para Productos
    Route::resource('productos', ProductoController::class);
    // Ruta para ver los elementos relacionados de un producto, por ejemplo, comentarios
    Route::get('productos/{producto}/comentarios', [ProductoController::class, 'showComentarios'])->name('productos.comentarios');

    // Rutas para Clientes
    Route::resource('clientes', ClienteController::class);
    // Ruta para ver los elementos relacionados de un cliente, por ejemplo, direcciones
    Route::get('clientes/{cliente}/direcciones', [ClienteController::class, 'showDirecciones'])->name('clientes.direcciones');
});

// Ruta de prueba para enviar un correo electrónico
Route::get('/send-test-mail', function () {
    Mail::raw('Esto es una prueba de correo electrónico.', function ($message) {
        $message->to('test@example.com')->subject('Prueba de Correo');
    });

    return 'Correo de prueba enviado. Revisa tu inbox en Mailtrap.';
});

require __DIR__.'/auth.php';
