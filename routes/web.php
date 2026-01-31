<?php
use App\Enums\EstadoCiudad;
use App\Enums\EstadoPersona;
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
use App\Http\Controllers\PersonaController;
use App\Models\Taller;
use App\Models\Ciudad;

Route::get('/', function () {
    $talleres=Taller::all();
    $ciudades=Ciudad::all();
    return view('welcome',compact('talleres','ciudades'));
});


//Route::get('/personas/create', [PersonaController::class, 'create'])->name('personas.create');
Route::post('/personas', [PersonaController::class, 'store'])->name('personas.store');

