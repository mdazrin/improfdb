<?php


use App\Http\Controllers\AcademicController;
use App\Http\Controllers\BaitulMuslimController;
use App\Http\Controllers\ImprofChildrenController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PasController;
use \App\Http\Controllers\PersonalInfoController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\ProfileController;
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

//model
Route::resource('users',UserController::class)->only(['index','edit','update','store']);
Route::resource('personalInfo',PersonalInfoController::class)->only('index','show','store','edit','update');
Route::resource('pas',PasController::class)->only(['index','edit','update','store']);
Route::resource('profession',ProfessionController::class)->only(['index','edit','update','store']);
Route::resource('academic',AcademicController::class)->only(['index','edit','update','store']);
Route::resource('locations',LocationController::class)->only(['index','edit','update','store']);
Route::resource('baitulmuslim',BaitulMuslimController::class)->only(['index','edit','update','store']);
Route::resource('improfchildren',ImprofChildrenController::class)->only(['index','edit','update','store']);

//User self-edit profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


