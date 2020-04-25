<?php
use Illuminate\Support\Facades\Route;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */
Route::get('/', function () {
    return view('home');
})->name('frontend.home');

// routing for admin


Route::namespace('Admin')->prefix("admin")->group(function () {
    // Controllers Within The "App\Http\Controllers\Admin" Namespace

    Route::get('login', function () {
        return view('admin.login');
    })->name('admin.login');

    Route::post('login', 'AuthController@login')->name('admin.login.post');
    
    Route::middleware("is_admin")->group(function(){
        
        Route::get('dashboard', function () {
            return view('admin.main.dashboard');
        })->name('admin.dashboard');
        
        
        
        Route::get('banner/add', function () {
            return view('admin.banner.index');
        })->name('admin.banner');
        
        Route::get('banner/add', function () {
            return view('admin.banner.add');
        })->name('admin.banner.add');
        
        
        Route::post('banner/add', 'SectionController@storeBanner')->name('admin.banner.add');
        
    });
 
    
    
});
    
 