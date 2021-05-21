<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserAuthController;

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
//     return view('users.index');
// });

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/contact', [HomeController::class, 'contact'])->name('/contact');
Route::get('/login', [UserAuthController::class, 'login'])->name('/login');
Route::post('/loginCheck', [UserAuthController::class, 'loginCheck'])->name('loginCheck');

Route::post('/create',[UserAuthController::class, 'create'])->name('auth.create');