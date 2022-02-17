<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\StudentController;

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

Route::get('/', [StudentController::class, 'index'])->name('home');
Route::get('/about', [StudentController::class, 'about'])->name('about');
Route::get('/contact', [StudentController::class, 'contact'])->name('contact');
Route::get('/details/{id}', [StudentController::class, 'detail'])->name('detail');
Route::post('/full-name', [StudentController::class, 'fullName'])->name('full-name');


