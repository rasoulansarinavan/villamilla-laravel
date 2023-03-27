<?php


use App\Http\Livewire\Admin\Auth\login;
use App\Http\Livewire\Admin\Auth\register;
use App\Http\Livewire\Admin\Categories\Edit;
use App\Http\Livewire\Admin\index\index;

use App\Http\Livewire\Admin\Residences\Create;
use App\Http\Livewire\Admin\Residences\Gallery;
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

//
//Route::get('/admin/register', Register::class)->middleware('guest');
//Route::get('/admin/login', Login::class)->middleware('guest');

//Route::get('/admin/index', Index::class);
//Route::get('/admin/environments/index', App\Http\Livewire\Admin\Environments\Index::class);
//Route::get('/admin/environments/edit/{id}', App\Http\Livewire\Admin\Environments\Edit::class);
//Route::get('/admin/categories/index', \App\Http\Livewire\Admin\Categories\index::class);

//Route::get('/index', App\Http\Livewire\Client\Index\Index::class);

Route::prefix('admin')->name('admin.')->group(function () {

//    Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function () {
//        Route::get('/home', function () {
//            return view('admin.home');
//        })->name('home');

    Route::get('/index', Index::class)->name('index');
    Route::prefix('environments')->name('environments.')->group(function () {

        Route::get('/index', App\Http\Livewire\Admin\Environments\Index::class)->name('index');
        Route::get('/edit/{id}', App\Http\Livewire\Admin\Environments\Edit::class)->name('edit');
    });
    Route::prefix('categories')->name('categories.')->group(function () {

        Route::get('/index', \App\Http\Livewire\Admin\Categories\index::class)->name('index');
        Route::get('/edit/{id}', Edit::class)->name('edit');
    });
    Route::prefix('residences')->name('residences.')->group(function () {

        Route::get('/index', \App\Http\Livewire\Admin\Residences\index::class)->name('index');
        Route::get('/gallery/{id}', Gallery::class)->name('gallery');
        Route::get('/edit/{id}', \App\Http\Livewire\Admin\Residences\Edit::class)->name('edit');
        Route::get('/create', Create::class)->name('create');
    });
    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {
        Route::get('/login', function () {
            return view('admin.login');
        });
        Route::get('/login', Login::class)->name('login');
    });
    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {
        Route::get('/register', function () {
            return view('admin.register');
        });
        Route::get('/register', Register::class)->name('register');
    });
//    });
});



//Route::get('/home', function () {
//    return view('welcome');
//});

//Route::get('/', Index::class);


//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::middleware(['auth:web', 'PreventBackHistory'])->group(function () {
//    Route::get('home', function () {
//        return 'home view';
//    });
//});
//
//Route::middleware(['guest:web', 'PreventBackHistory'])->group(function () {
//
//    Route::get('/', function () {
//        return view('client/index');
//    })->name('user.home');
//
//    Route::get('/login', [UserController::class, 'LoginForm'])->name('user.login');
//    Route::get('/login/store', [UserController::class, 'LoginStore'])->name('user.check');
//    Route::get('/register', [UserController::class, 'RegisterForm'])->name('user.register');
//    Route::post('/register/store', [UserController::class, 'RegisterStore'])->name('user.store');
//});
//
//Route::prefix('admin')->name('admin.')->group(function () {
//
//    Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function () {
//        Route::get('/home', function () {
//            return view('admin.home');
//        })->name('home');
//
//        Route::prefix('environments')->name('environments.')->group(function () {
//
//            Route::get('', [App\Http\Livewire\Admin\Environments\Index::class, 'index'])->name('index');
//            Route::post('/store', [EnvironmentController::class, 'store'])->name('store');
//            Route::get('/edit/{environment}', [EnvironmentController::class, 'edit'])->name('edit');
//            Route::post('/update/{environment}', [EnvironmentController::class, 'update'])->name('update');
//            Route::delete('/destroy/{environment}', [EnvironmentController::class, 'destroy'])->name('destroy');
//        });
//        Route::prefix('categories')->name('categories.')->group(function () {
//
//            Route::get('', [CategoryController::class, 'index'])->name('index');
//            Route::post('/store', [CategoryController::class, 'store'])->name('store');
//            Route::get('/edit/{category}', [CategoryController::class, 'edit'])->name('edit');
//            Route::post('/update/{category}', [CategoryController::class, 'update'])->name('update');
//            Route::delete('/destroy/{category}', [CategoryController::class, 'destroy'])->name('destroy');
//        });
//        Route::prefix('residences')->name('residences.')->group(function () {
//
//            Route::get('', [ResidenceController::class, 'index'])->name('index');
//            Route::get('/create', [ResidenceController::class, 'create'])->name('create');
//            Route::post('/store', [ResidenceController::class, 'store'])->name('store');
//            Route::get('/edit/{residence}', [ResidenceController::class, 'edit'])->name('edit');
//            Route::get('/active/{residence}', [ResidenceController::class, 'active'])->name('active');
//            Route::get('/inactive/{residence}', [ResidenceController::class, 'inactive'])->name('inactive');
//            Route::get('/gallery/{residence}', [ResidenceController::class, 'gallery'])->name('gallery');
//            Route::post('/galleryStore/{residence}', [ResidenceController::class, 'galleryStore'])->name('galleryStore');
//            Route::post('/galleryDestroy/{gallery}', [ResidenceController::class, 'galleryDestroy'])->name('galleryDestroy');
//            Route::patch('/update/{residence}', [ResidenceController::class, 'update'])->name('update');
//            Route::delete('/destroy/{residence}', [ResidenceController::class, 'destroy'])->name('destroy');
//        });
//    });
//
//    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {
//        Route::get('/login', function () {
//            return view('admin.auth.login');
//        })->name('login');
//        Route::post('/login/store', [AdminController::class, 'LoginStore'])->name('check');
//    });
//});
