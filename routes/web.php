<?php
use Illuminate\Support\Facades\Route;
use App\Models\Page;

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

    Route::middleware("is_admin")->group(function () {

        Route::get('dashboard', function () {
            return view('admin.main.dashboard');
        })->name('admin.dashboard');

        Route::get('banner', 'BannerController@banner')->name('admin.banner');

        Route::get('banner/add', function () {
            return view('admin.banner.add');
        })->name('admin.banner.add');

        Route::post('banner/add', 'BannerController@storeBanner')->name('admin.banner.add.post');

        Route::get('banner/update/{model}', 'BannerController@updateBanner')->name('admin.banner.update');

        Route::post('banner/update/{model}', 'BannerController@doUpdateBanner')->name('admin.banner.update.post');

        Route::get('service', 'ServiceController@index')->name('admin.service');

        Route::get('service/add', function () {
            return view('admin.service.add');
        })->name('admin.service.add');

        Route::post('service/add', 'ServiceController@storeService')->name('admin.service.add.post');

        Route::get('service/update/{model}', 'ServiceController@updateBanner')->name('admin.service.update');

        Route::post('service/update/{model}', 'ServiceController@doUpdateBanner')->name('admin.service.update.post');

        // homepage section manage

        Route::get('homepage/section-one', function () {
            return view('admin.homepage.sectionOne')->with('model', Page::where('type_id', Page::TYPE_HOMEPAGE)->where('section_index',Page::SECTION_INDEX_ONE)->first());
        })->name('admin.homepage.sectionOne');

        Route::post('homepage/section-one', 'PageController@storeHomepageSectionOne')->name('admin.homepage.sectionOne.post');
        
        
        Route::get('homepage/section-three', function () {
            return view('admin.homepage.sectionThree')->with('model', Page::where('type_id', Page::TYPE_HOMEPAGE)->where('section_index',Page::SECTION_INDEX_THREE)->first());
        })->name('admin.homepage.sectionThree');
        
        Route::post('homepage/section-three', 'PageController@storeHomepageSectionThree')->name('admin.homepage.sectionThree.post');
        
        
        
        
        Route::get('homepage/section-four', function () {
            return view('admin.homepage.sectionFour')->with('model', Page::where('type_id', Page::TYPE_HOMEPAGE)->where('section_index',Page::SECTION_INDEX_FOUR)->first());
        })->name('admin.homepage.sectionFour');
        
        Route::post('homepage/section-four', 'PageController@storeHomepageSectionFour')->name('admin.homepage.sectionFour.post');
        
        
        
        
    });
});
    
 