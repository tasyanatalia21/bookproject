<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\SeriController;
use App\Http\Controllers\TransactionController;

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

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate'])->name('login.authenticate');
Route::get('/logout',[LoginController::class,'logout'])->middleware('auth');

// Route::Post('/logout', function(){
//     Auth::logout();
//     request()->session()->invalidate();
//     request()->session()->regenerateToken();
//     return redirect('/');
// })->name('logout')->middleware('auth');
Route::get('/register',[RegisterController::class,'index'])->name('register')->middleware('guest');
Route::post('/register',[RegisterController::class,'store'])->name('register.store');
Route::get('/home',[HomeController::class,'index'])->middleware('auth');

Route::resource('books',BookController::class)->middleware('auth');

Route::resource('authors',AuthorController::class)->middleware('auth');

Route::resource('genres',GenreController::class)->middleware('auth');

Route::resource('Seris',SeriController::class)->middleware('auth');

Route::resource('transactions',TransactionController::class)->middleware('auth');
