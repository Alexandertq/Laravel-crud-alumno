<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

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

Route::get('/alumnos',[AlumnoController::class,'index_GET']);

//registrar
Route::get('/alumnos/create',[AlumnoController::class,'create_GET']);
Route::post('/alumnos',[AlumnoController::class,'store_POST'])->name('alumnos.store');

//edit
Route::get('/alumnos/{alumno}/edit',[AlumnoController::class,'edit_GET'])->name('alumnos.edit');
Route::put('/alumnos/{alumno}',[AlumnoController::class,'update_PUT'])->name('alumnos.update');

//delete
Route::get('/alumnos/{alumno}/delete',[AlumnoController::class,'delete_GET'])->name('alumnos.delete');
Route::delete('/alumnos/{alumno}',[AlumnoController::class,'destroy_DELETE'])->name('alumnos.destroy');
