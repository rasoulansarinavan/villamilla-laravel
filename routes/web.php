<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EnvironmentController;
use App\Http\Controllers\Admin\ResidenceController;
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

        Route::prefix('environments')->name('environments.')->group(function () {

            Route::get('', [EnvironmentController::class, 'index'])->name('index');
            Route::post('/store', [EnvironmentController::class, 'store'])->name('store');
            Route::get('/edit/{environment}', [EnvironmentController::class, 'edit'])->name('edit');
            Route::post('/update/{environment}', [EnvironmentController::class, 'update'])->name('update');
            Route::delete('/destroy/{environment}', [EnvironmentController::class, 'destroy'])->name('destroy');
        });
        Route::prefix('categories')->name('categories.')->group(function () {

            Route::get('', [CategoryController::class, 'index'])->name('index');
            Route::post('/store', [CategoryController::class, 'store'])->name('store');
            Route::get('/edit/{category}', [CategoryController::class, 'edit'])->name('edit');
            Route::post('/update/{category}', [CategoryController::class, 'update'])->name('update');
            Route::delete('/destroy/{category}', [CategoryController::class, 'destroy'])->name('destroy');
        });
        Route::prefix('residences')->name('residences.')->group(function () {

            Route::get('', [ResidenceController::class, 'index'])->name('index');
            Route::get('/create', [ResidenceController::class, 'create'])->name('create');
            Route::post('/store', [ResidenceController::class, 'store'])->name('store');
            Route::get('/edit/{residence}', [ResidenceController::class, 'edit'])->name('edit');
            Route::get('/gallery/{residence}', [ResidenceController::class, 'gallery'])->name('gallery');
            Route::post('/galleryStore/{residence}', [ResidenceController::class, 'galleryStore'])->name('galleryStore');
            Route::post('/galleryDestroy/{gallery}', [ResidenceController::class, 'galleryDestroy'])->name('galleryDestroy');
            Route::post('/update/{residence}', [ResidenceController::class, 'update'])->name('update');
            Route::delete('/destroy/{residence}', [ResidenceController::class, 'destroy'])->name('destroy');
        });
    });

    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {
        Route::get('/login', function () {
            return view('admin.auth.login');
        })->name('login');
        Route::post('/login/store', [AdminController::class, 'LoginStore'])->name('check');
    });
});
