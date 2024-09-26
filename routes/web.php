<?php

use App\Http\Controllers\admin\VehicleController;
use Illuminate\Support\Facades\Route;

use app\Http\Controllers\IndexControler;
use App\Models\Vehicle;

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

/*

Route::get('miprimersitio/{nombre?}/{apellido?}/{numero?}', 
    function($nombre="No definido",$apellido="No definido",$numero=0){
        return view('index')
        ->with('numero',$numero)
        ->with('nombre',$nombre) 
        ->with('apellido',$apellido)
        ->with('hobbies',array('futbol','cine','viajes','videojuegos'));
        
    }
);*/


//Route::get('miprimersitio/{nombre?}/{apellido?}/{numero?}', [IndexControler::class,'index']);

Route::get('vehicles', [VehicleController::class,'index'])->name('vehicles.index');
Route::get('vehicles/create', [VehicleController::class,'create'])->name('vehicles.create');
Route::post('vehicles', [VehicleController::class,'store'])->name('vehicles.store'); #post se pasa parametros definidos
Route::get('vehicles/{id}', [VehicleController::class,'show'])->name('vehicles.show');
Route::get('vehicles/{id}/edit', [VehicleController::class ,'edit'])->name('vehicles.edit');
Route::put('vehicles/{vehicle}', [VehicleController::class,'update'])->name('vehicles.update');  #put se pasa el request
Route::delete('vehicles/{id}', [VehicleController::class, 'destroy'])->name('vehicles.delete');