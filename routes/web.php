<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActividadController;
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

Route::get('/dashboard', [ActividadController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/crear/actividad', [ActividadController::class, 'create'])->middleware(['auth', 'verified'])->name('actividad.create');
Route::post('/guardar/actividad', [ActividadController::class, 'store'])->middleware(['auth', 'verified'])->name('actividad.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
