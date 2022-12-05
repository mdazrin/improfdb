<?php

use \App\Http\Controllers\PersonalInfoController;
use App\Http\Controllers\UserController;
use \App\Http\Controllers\UserProfileController;
use \App\Http\Controllers\ImprofProfileController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SessionController;
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


Route::get('/',function (){
    return view('home');
})->middleware('guest')->name('home');

Route::get('/login',function (){
   return view('login');
})->middleware('guest')->name('login');

Route::post('/login',[SessionController::class,'login'])
    ->middleware('guest')
    ->name('login');

Route::post('/logout',[LogoutController::class,'logout'])
    ->middleware('auth')
    ->name('logout');

Route::get('basic',[ImprofProfileController::class,'index'])->name('basic');
Route::get('basic/search',[ImprofProfileController::class,'show_search'])->name('basic.show_search');


Route::get('/user-profile',[UserProfileController::class,'index'])->name('user-profile');
Route::post('/user-profile',[UserProfileController::class,'index'])->name('user-profile');

Route::get('/personal-info',[PersonalInfoController::class,'index'])->name('personal-info');



Route::get('basic/create',[UserController::class,'create'])->name('basic.create');
//Route::get('basic/create',[ImprofProfileController::class,'create'])->name('basic.create');
Route::post('basic/store',[UserController::class,'store'])->name('basic.store');
//Route::post('basic/store',[ImprofProfileController::class,'store'])->name('basic.store');

Route::resource('users',UserController::class)->only(['create','store','show','edit','update']);
