<?php

use App\Http\Controllers\ServicioController;
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
});

Route::middleware('auth')->group(function () {
    Route::get('/servicio', [ServicioController::class, 'index'])->name('servicio.index');
    Route::post('/servicio', [ServicioController::class, 'store'])->name('servicio.store');
    Route::get('/servicio/create', [ServicioController::class, 'create'])->name('servicio.create');
    Route::delete('/servicio/{servicio}', [ServicioController::class, 'destroy'])->name('servicio.destroy');
    Route::put('/servicio/{servicio}', [ServicioController::class, 'update'])->name('servicio.update');
    Route::get('/servicio/{servicio}/edit', [ServicioController::class, 'edit'])->name('servicio.edit');


});

require __DIR__.'/auth.php';
