<?php

use App\Http\Controllers\PasController;
use \App\Http\Controllers\PersonalInfoController;
use App\Http\Controllers\UserController;
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

Route::get('test',function (){
    return view('posts');
});

Route::get('/',function (){
    return view('home');
})->name('homepage');

Route::get('/login',function (){
   return view('login');
})->name('login');

Route::post('/login',[SessionController::class,'login'])
    ->middleware('guest')
    ->name('login');

Route::post('/logout',[LogoutController::class,'logout'])
    ->middleware('auth')
    ->name('logout');

Route::resource('users',UserController::class)->except('store');

Route::resource('personals',PersonalInfoController::class)
    ->only(['index','store','edit','update']);

Route::resource('pas',PasController::class)->only('index');
