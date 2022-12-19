<?php


use App\Http\Controllers\LocationController;
use App\Http\Controllers\PasController;
use \App\Http\Controllers\PersonalInfoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SessionController;

use App\Http\Controllers\AcademicTableController;
use App\Http\Controllers\PasTableController;
use App\Http\Controllers\ProfessionTableController;
use App\Http\Controllers\PersonalTableController;
use App\Http\Controllers\ImprofTableController;
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

//output tables only
//Route::resource('improf-profiles-table',ImprofTableController::class)->only('index');
Route::resource('personal-info-table',PersonalTableController::class)->only('index');
Route::resource('pas-table',PasTableController::class)->only('index');
Route::resource('profession-table',ProfessionTableController::class)->only('index');
Route::resource('academic-table',AcademicTableController::class)->only('index');

//model
Route::resource('personalInfo',PersonalInfoController::class)->only('index','show','store','edit','update');
Route::resource('users',UserController::class)->only(['index','edit','update','store']);
Route::resource('locations',LocationController::class)->only(['index','edit','update','store']);

//User self-edit profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


