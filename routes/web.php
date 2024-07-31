<?php

use App\Http\Controllers\CitasMedicasController;
use App\Http\Controllers\MedicosController;
use App\Http\Controllers\PacientesController;
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
    return view('auth.login');
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

/* Rutas: Médicos */

Route::resource('medicos', MedicosController::class);

// Route::get('/medicos', [App\Http\Controllers\MedicosController::class, 'index'])->name('medicos.index');
// Route::get('/medicos/create', [App\Http\Controllers\MedicosController::class, 'create'])->name('medicos.create');
Route::get('/medicos/show/{medicos}', [App\Http\Controllers\MedicosController::class, 'show'])->name('medicos.show');
// Route::get('/medicos/edit/{medicos}', [App\Http\Controllers\MedicosController::class, 'edit'])->name('medicos.edit');
// Route::put('/medicos/update/{medicos}', [App\Http\Controllers\MedicosController::class, 'update'])->name('medicos.update');

/* Rutas: Pacientes */

Route::resource('pacientes', PacientesController::class);

// Route::get('/pacientes', [App\Http\Controllers\PacientesController::class, 'index'])->name('pacientes.index');
// Route::get('/pacientes/create', [App\Http\Controllers\PacientesController::class, 'create'])->name('pacientes.create');
Route::get('/pacientes/show/{paciente}', [App\Http\Controllers\PacientesController::class, 'show'])->name('pacientes.show');
// Route::get('/pacientes/edit/{paciente}', [App\Http\Controllers\PacientesController::class, 'edit'])->name('pacientes.edit');
// Route::put('/pacientes/update/{paciente}', [App\Http\Controllers\PacientesController::class, 'update'])->name('pacientes.update');

/* Rutas: Citas Médicas */

Route::resource('citas', CitasMedicasController::class);

// Route::get('/citas', [App\Http\Controllers\CitasMedicasController::class, 'index'])->name('citas.index');
// Route::get('/citas/create', [App\Http\Controllers\CitasMedicasController::class, 'create'])->name('citas.create');
// Route::get('/citas/edit/{citasMedicas}', [App\Http\Controllers\CitasMedicasController::class, 'edit'])->name('citas.edit');
Route::get('/citas/show/{citasMedicas}', [App\Http\Controllers\CitasMedicasController::class, 'show'])->name('citas.show');
// Route::put('/citas/update/{citasMedicas}', [App\Http\Controllers\PacientesController::class, 'update'])->name('citas.update');
