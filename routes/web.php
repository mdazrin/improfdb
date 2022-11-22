<?php

use \App\Http\Controllers\BasicTableController;
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
    ->name('/logout');

Route::resource('basic', BasicTableController::class)

    ->only('index')
    ->middleware('auth');
