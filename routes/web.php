<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\LockScreen;


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
    return view('auth.login');
});

Route::get('registers', function () {
    return view('auth.register');
});


Route::group(['middleware'=>'auth'],function()
{
    Route::get('home',function()
    {
        return view('home');
    });
    Route::get('home',function()
    {
        return view('home');
    });
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/settings', function () {
    return view('settings');
});



Route::get('/settings', [App\Http\Controllers\CarSettings::class, 'index']);
Route::get('/transactions', [App\Http\Controllers\CarSettings::class, 'indexes']);
Route::get('/settings/{car}/delete', [App\Http\Controllers\CarSettings::class, 'delete']);
Route::put('/settings/{car}', [App\Http\Controllers\CarSettings::class, 'update']);
Route::delete('/settings/{car}', [App\Http\Controllers\CarSettings::class, 'destroy']);
Route::get('/transactions/{car}/update', [App\Http\Controllers\CarSettings::class, 'updates']);



Auth::routes();

// ----------------------------- home dashboard ------------------------------//
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// -----------------------------login----------------------------------------//
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'authenticate']);
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// ------------------------------ register ---------------------------------//
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'storeUser'])->name('register');

// ------------------------------ add/delete Car ---------------------------------//

Route::post('/settings', [App\Http\Controllers\CarSettings::class, 'addCar'])->name('settings');
Route::get('delete_cars/{id}', [App\Http\Controllers\CarSettings::class, 'delete'])->middleware('auth');


