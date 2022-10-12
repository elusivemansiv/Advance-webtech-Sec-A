<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/registration',[HomeController::class,'registration'])->name('registration');
Route::get('/teams',[HomeController::class,'teams'])->name('teams');
Route::get('/login',[HomeController::class,'login'])->name('login');

Route::post('/login',[HomeController::class,'loginsubmit'])->name('loginsubmit');
Route::post('/registration',[HomeController::class,'registrationsubmit'])->name('registrationsubmit');