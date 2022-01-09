<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\authController;

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
    if(Auth()->user()){
        return redirect('/dashboard');
    }
    return view('pages/request/login');
});

Route::get('/form', function () {
    return view('pages/forms/carRegister');
})->middleware('App\Http\Middleware\AuthMiddleware')->name('form');

Route::post('/form', [CarController::class, 'store'])->middleware('App\Http\Middleware\AuthMiddleware')->name('addCart');

Route::get('/dashboard', function () {
    return view('pages/dashboard/index');
})->middleware('App\Http\Middleware\AuthMiddleware');

Route::get('/car/{id}', [CarController::class, 'show'])->middleware('App\Http\Middleware\AuthMiddleware')->name('car');

Route::post('/login', [authController::class, 'authenticate'])->name('login');

Route::get('/login', function () {
    return view('pages/request/login');
});

Route::post('/register', [authController::class, 'store'])->name('register');

Route::get('/register', function () {
    return view('pages/request/register');
});

Route::get('/liste', [CarController::class,'liste'] )->middleware('App\Http\Middleware\AuthMiddleware')->name('liste');

Route::get('/logout',function(){

    Auth::logout();
    session()->flash('message','vous etes déconnecté');
    return redirect('/login');
});


Route::get('/update/{id}',[CarController::class,'updateView'])->middleware('App\Http\Middleware\AuthMiddleware');

Route::get('/delete/{id}',[CarController::class,'delete'] )->middleware('App\Http\Middleware\AuthMiddleware')->name('delete');

Route::post('/update/{id}',[CarController::class,'updateValue'])->middleware('App\Http\Middleware\AuthMiddleware')->name('update');
