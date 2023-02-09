<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
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

/* Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});
Route::get('service', function () {
    return view('service');
});
Route::get('contact', function () {
    return view('contact');
}); */

Route::get('/', function () {
    return view('home');
})->name('/');

Route::get('about', function () {
    return view('about');
})->name('about');
Route::get('service', function () {
    return view('service');
})->name('service');
Route::get('contact', function () {
    return view('contact');
})->name('contact');


Route::get('/empleado', function () {
    return view('empleado.index');
});

Route::get('/empleado/create',[EmpleadoController::class,'create'] );