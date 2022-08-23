<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\EnvironmentController;
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

Route::middleware(['auth:web', 'PreventBackHistory'])->group(function () {
    Route::get('home', function () {
        return 'home view';
    });
});

Route::middleware(['guest:web', 'PreventBackHistory'])->group(function () {

    Route::get('/', function () {
        return view('client/index');
    })->name('user.home');

    Route::get('/login', [UserController::class, 'LoginForm'])->name('user.login');
    Route::get('/login/store', [UserController::class, 'LoginStore'])->name('user.check');
    Route::get('/register', [UserController::class, 'RegisterForm'])->name('user.register');
    Route::post('/register/store', [UserController::class, 'RegisterStore'])->name('user.store');
});

Route::prefix('admin')->name('admin.')->group(function () {

    Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function () {
        Route::get('/home', function () {
            return view('admin.home');
        })->name('home');
        Route::get('environments',[EnvironmentController::class,'index'])->name('environments.index');
        Route::post('environments/store',[EnvironmentController::class,'store'])->name('environments.store');
        Route::get('environments/edit/{environment}',[EnvironmentController::class,'edit'])->name('environments.edit');
        Route::post('environments/update/{environment}',[EnvironmentController::class,'update'])->name('environments.update');
        Route::delete('environments/destroy/{environment}',[EnvironmentController::class,'destroy'])->name('environments.destroy');
    });

    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {
        Route::get('/login', function () {
            return view('admin.auth.login');
        })->name('login');
        Route::post('/login/store', [AdminController::class, 'LoginStore'])->name('check');
    });
});
