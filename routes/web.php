<?php

use App\Http\Controllers\Client\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:web','PreventBackHistory'])->group(function () {
    Route::get('home', function () {
        return 'home view';
    });
});

Route::middleware(['guest:web','PreventBackHistory'])->group(function () {

    Route::get('/', function () {
        return 'home view';
    })->name('user.home');

    Route::get('/login', [UserController::class, 'LoginForm'])->name('user.login');
    Route::get('/login/store', [UserController::class, 'LoginStore'])->name('user.check');
    Route::get('/register', [UserController::class, 'RegisterForm'])->name('user.register');
    Route::post('/register/store', [UserController::class, 'RegisterStore'])->name('user.store');
});
