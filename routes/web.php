<?php

use App\Http\Controllers\Auth\LogInController;
use App\Http\Controllers\Auth\LogOutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\StudentController;
use App\Models\Student;
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
})->name('home');

Route::get('/historia', function () {
    return view('historia');
})->name('historia');

Route::get('/lan', function () {
    return view('lan');
})->name('lan');

Route::get('/man', function () {
    return view('man');
})->name('man');

Route::get('/wan', function () {
    return view('wan');
})->name('wan');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/logout', [LogOutController::class, 'destroy'])->middleware('auth')->name('logOut');

Route::post('logIn', [LogInController::class, 'store'])->name('LogIn');


Route::get('/registro', [RegisterController::class, 'create'])->name('formRegister');
Route::post('/registro', [RegisterController::class, 'store'])->name('userCreate');

Route::middleware('auth')->group(function () {





// Rutas RESTful para el recurso "estudiantes"
Route::resource('/estudiantes', StudentController::class);

// Rutas personalizadas
Route::get('listaAZ/{colegio}', [StudentController::class, 'getStudentsByCollege']);

Route::get('listaAZ/carrera/{carrera}', [StudentController::class, 'getStudentsByCarrera']);

Route::get('listaAZ/curso/{curso}', [StudentController::class, 'getStudentsByCurso']);

Route::get('listaAZ/colegio/{colegio}/carrera/{carrera}/curso/{curso}/jornada/{jornada}/seccion/{seccion}', 
[StudentController::class, 'getStudentsByCCCJS']);

Route::get('/TotalXJornada',[StudentController::class, 'countbyJornada']);
Route::get('/TotalXJornada/colegio/{colegio}',[StudentController::class, 'countByJornadaXColegio']);

});