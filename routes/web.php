<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserAuthController;

use App\Http\Controllers\Owner\OwnerController;
use App\Http\Controllers\Owner\FlatController;
use App\Http\Controllers\Owner\HouseController;
use App\Http\Controllers\Owner\AccountController;
use App\Http\Controllers\Owner\RenterOwnerController;
use App\Http\Controllers\Owner\RentController;


use App\Http\Controllers\Manager\ManagerController;

use App\Http\Controllers\Renter\RenterController;

use App\Http\Controllers\Admin\AdminController;

use App\Http\Controllers\DltController;
use App\Http\Controllers\Admin;
use GuzzleHttp\Middleware;
//use RealRashid\SweetAlert\Facades\Alert;

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
//Route::post('/post',[RenterController::class,'post'])->name('/posr');

Route::group([ 'prefix'=>'owner', 'middleware'=>['Dlt','AuthCheck','Owner']], function(){
    Route::get('dashboard',[OwnerController::class,'index'])->name('owner.dashboard');
   
    //Account Controller
    Route::get('account',[AccountController::class,'account'])->name('owner.account');
    Route::post('addManager',[AccountController::class,'addManager'])->name('addManager');
    Route::post('account/manager/edit/{id}',[AccountController::class,'editManager'])->name('account.manager.edit');
    Route::post('account/manager/destroy/{id}',[AccountController::class,'destroyManager'])->name('account.manager.destroy');
    
    //House Controller
    Route::get('building',[HouseController::class,'building'])->name('owner.building');
    Route::post('addBuilding',[HouseController::class,'addBuilding'])->name('addBuilding');
    Route::post('building/destroy/{id}',[HouseController::class,'destroy'])->name('building.destroy');
    Route::post('building/update/{id}',[HouseController::class,'update'])->name('building.update');
   
    //Flat Controller
    Route::get('flat',[FlatController::class,'flat'])->name('owner.flat');
    Route::post('addFlat',[FlatController::class,'addFlat'])->name('addFlat');
    Route::post('flat/destroy/{id}',[FlatController::class,'destroy'])->name('flat.destroy');
    Route::post('flat/update/{id}',[FlatController::class,'update'])->name('flat.update');
    
    //Renter Controller
    Route::get('renter',[RenterOwnerController::class,'renter'])->name('owner.renter');

    //Rent Controller
    Route::get('rent',[RentController::class,'rent'])->name('owner.rent');


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

