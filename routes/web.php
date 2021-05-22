<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\Owner\OwnerController;
use App\Http\Controllers\Manager\ManagerController;
use App\Http\Controllers\Renter\RenterController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\DltController;
use App\Http\Controllers\Admin;
use GuzzleHttp\Middleware;

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
Route::get('/logout',[UserAuthController::class, 'logout'])->name('/logout');
Route::post('/create',[UserAuthController::class, 'create'])->name('auth.create');


//dltNotification
Route::get('/dltNotification',[DltController::class, 'index'])->name('dltNotification');
// Route::group(['prefix'=>'admin', 'middleware'=>['auth','admin'], 'namespace'=>'admin'],function(){
//     route::get('dashbord',[AdminController::class,'index'])->name('admin.dashbord');
// });


Route::group([ 'prefix'=>'owner', 'middleware'=>['Dlt','AuthCheck','Owner']], function(){
    Route::get('dashboard',[OwnerController::class,'index'])->name('owner.dashboard');
    Route::get('account',[OwnerController::class,'account'])->name('owner.account');
    Route::get('building',[OwnerController::class,'building'])->name('owner.building');
    Route::get('flat',[OwnerController::class,'flat'])->name('owner.flat');
    Route::get('rent',[OwnerController::class,'rent'])->name('owner.rent');
});

Route::group([ 'prefix'=>'manager', 'middleware'=>['AuthCheck']], function(){
    Route::get('dashboard',[ManagerController::class,'index'])->name('manager.dashboard');
});

Route::group([ 'prefix'=>'renter', 'middleware'=>['AuthCheck']], function(){
    Route::get('dashboard',[RenterController::class,'index'])->name('renter.dashboard');
});

Route::group([ 'prefix'=>'admin', 'middleware'=>['AuthCheck']], function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
   
});

