<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\FaltaController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\ContratoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

/*Route::get('/empleado', function () {
    return view('empleado.index');
});

Route::get('empleado/create', [EmpleadoController::class, 'create']);*/

Route::resource('empleado', EmpleadoController::class)->middleware('auth');

Auth::routes(['register'=>true, 'rese'=>false]);

Route::get('/home', [EmpleadoController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function() {

    Route::get('/', [EmpleadoController::class, 'index'])->name('home');

});

/**ROLES */
Route::get('/roles', [RolesController::class, 'index']);
Route::get('/roles/create', [RolesController::class, 'create']);
Route::post('/roles/store', [RolesController::class, 'store']);

/**FALTAS */
Route::get('/falta', [FaltaController::class, 'index']);
Route::get('/falta/create', [FaltaController::class, 'create']);
Route::post('/falta/store', [FaltaController::class, 'store']);

/**REPORTES */
Route::get('/reporte', [ReporteController::class, 'index']);
Route::get('/reporte/create', [ReporteController::class, 'create']);
Route::post('/reporte/store', [ReporteController::class, 'store']);

/**CONTRATOS */
Route::get('/contrato', [ContratoController::class, 'index']);
Route::get('/contrato/create', [ContratoController::class, 'create']);
Route::post('/contrato/store', [ContratoController::class, 'store']);
