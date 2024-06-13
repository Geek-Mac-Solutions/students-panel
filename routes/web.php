<?php

use App\Http\Controllers\Web\Home\HomeController;
use App\Http\Controllers\Web\ClassController;
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

Route::get('/', [HomeController::class, 'index'])->name('web.home'); 


// LIVE CLASSES
Route::get('/class/view', [ClassController::class, 'classView'])->name('web.class.view'); 






