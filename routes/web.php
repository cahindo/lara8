<?php

use App\Http\Controllers\PagesController;
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

// Route::get('/', function () {
//     $nama = 'Admin';
//     return view('index', ['nama' => $nama]);
// });

// Route::get('/about', function () {
//     $nama = 'Admin';
//     return view('about');
// });

// Route::get('/mahasiswa', function () {
//     return view('mahasiswa');
// });

// cara lain routing
// Route::get('/', [PagesController::class, 'home']);

Route::get('/', 'App\Http\Controllers\PagesController@home');
Route::redirect('/home', '/');

Route::get('/about', 'App\Http\Controllers\PagesController@about');

Route::get('/mahasiswa', 'App\Http\Controllers\MahasiswaController@index');

// STUDENTS
Route::get('/students', 'App\Http\Controllers\StudentsController@index');
Route::get('/students/create', 'App\Http\Controllers\StudentsController@create');
Route::post('/students', 'App\Http\Controllers\StudentsController@store');
// ROUTE MODEL BINDING
Route::get('/students/{student}', 'App\Http\Controllers\StudentsController@show');
// HAPUS DATA DENGAN METOD DELETE - berkesinambungan dengan form dengan @method()
Route::delete('/students/{student}', 'App\Http\Controllers\StudentsController@destroy');
// EDIT DATA
Route::get('/students/{student}/edit', 'App\Http\Controllers\StudentsController@edit');
// SAVING THE EDITED DATA
Route::patch('/students/{student}', 'App\Http\Controllers\StudentsController@update');

// ! MAGIC ROUTE
Route::resource('student', 'App\Http\Controllers\StudentsController');
