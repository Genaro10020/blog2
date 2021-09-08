<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


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

/*Route::get('/', function () {
    return view('welcome');
});*/
//FORMA 1 Definicion de rutas

/*Route::get('curso', [CursoController::class,'index'])->name('cursos.index');
Route::get('curso/create',[CursoController::class,'create'])->name('cursos.create');
Route::post('curso',[CursoController::class,'store'])->name('cursos.store');
Route::get('curso/{curso}',[CursoController::class,'show'])->name('cursos.show');
Route::get('curso/{curso}/edit',[CursoController::class,'edit'])->name('cursos.edit');
Route::put('curso/{curso}',[CursoController::class,'update'])->name('cursos.update');
Route::delete('curso/{curso}',[CursoController::class,'destroy'])->name('cursos.destroy');*/
//FORMA 2 Definicion de rutas
Route::get('/',HomeController::class)->name('home');
Route::get('contactanos', [ContactanosController::class,'index'])->name('contactanos.index');
Route::resource('cursos', CursoController::class);
Route::view('nosotros', 'nosotros')->name('nosotros');
Route::post('contactanos',[ContactanosController::class,'store'])->name('contactanos.store');
//para mostra contenido statico
//Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas'=> 'curso'])->names('cursos'); 
//genera las rutas y hasta el name de cada ruta todo econ pocas palabras.