<?php
use Illuminate\Support\Facades\Route;
use App\Models\Page;
use App\Models\City;
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

Route::middleware("frontend_basic")->group(function (){
    
    Route::get('/',"HomeController@index")->name('frontend.home');
    
    Route::get('/services',"HomeController@services")->name('frontend.services');
    
    
    Route::get('/about-us',"HomeController@aboutUs")->name('frontend.aboutUs');
    
    
    Route::get('/team',"HomeController@team")->name('frontend.team');
    Route::get('/contact-us',"HomeController@contactUs")->name('frontend.contactUs');
    
    Route::post('/contact-us',"HomeController@storeEnquiry")->name('frontend.contactUs.post');
    

    Route::get('/customer',"HomeController@customer")->name('frontend.customer');

    Route::post('/customer',"UserController@storeCustomer")->name('frontend.customer.add.post');


    Route::get('/jobs',"JobController@index")->name('frontend.jobs');


    Route::get('/job/{model}',"JobController@view")->name('frontend.jobs.view');


    Route::get('/chat',"ChatController@index")->name('frontend.chat');

    Route::get('/get-messages',"ChatController@getMessages")->name('frontend.chat.get');


    Route::post('/send-message',"ChatController@sendMessage")->name('frontend.sendMessage');

    Route::post('/customer/login',"UserController@login")->name('frontend.login.post');





    
});

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

        
        
        
        
        
        Route::post('homepage/section/{section_index}', 'PageController@storeHomepageSection')->where([
            'section_index' => '[1-4]',
            
        ])->name('admin.homepage.section.post');
        
        
        Route::get('homepage/section/{section_index}', 'PageController@HomepageSection')->where([
            'section_index' => '[1-4]',
            
        ])->name('admin.homepage.section');
        
        
  
        
        
        
        Route::post('services/section/{section_index}', 'PageController@storeServicesSection')->where([
            'section_index' => '[1]',
            
        ])->name('admin.services.section.post');
        
        
        Route::get('services/section/{section_index}', 'PageController@ServicesSection')->where([
            'section_index' => '[1]',
            
        ])->name('admin.services.section');
        
        
        
        
        
        

        Route::post('about-us/section/{section_index}', 'PageController@storeAboutUsSection')->where([
            'section_index' => '[1-4]',
          
        ])->name('admin.aboutUs.section.post');

        
        Route::get('about-us/section/{section_index}', 'PageController@aboutUsSection')->where([
            'section_index' => '[1-4]',
            
        ])->name('admin.aboutUs.section');
        
        
        
        Route::post('team/section/{section_index}', 'PageController@storeTeamSection')->where([
            'section_index' => '[1-1]',
            
        ])->name('admin.team.section.post');
        
        
        Route::get('team/section/{section_index}', 'PageController@teamSection')->where([
            'section_index' => '[1-1]',
            
        ])->name('admin.team.section');
        
        
     
        
        
        
        Route::post('contact-us/section/{section_index}', 'PageController@storeContactUsSection')->where([
            'section_index' => '[1-1]',
            
        ])->name('admin.contactUs.section.post');
        
        
        Route::get('contact-us/section/{section_index}', 'PageController@contactUsSection')->where([
            'section_index' => '[1-1]',
            
        ])->name('admin.contact-us.section.post');
        
        
        
        
        
        
        Route::post('other/other-information', 'PageController@storeOtherInformation')->name('admin.other.otherInformation.post');
        
        
        Route::get('other/other-information', 'PageController@otherInformation')->name('admin.other.otherInformation');
        
        
        
        Route::get('/enquiry', 'EnquiryController@index')->name('admin.enquiry');



        Route::get('/position', 'PositionController@index')->name('admin.position');

        
        Route::get('position/add', function () {
            return view('admin.position.add');
        })->name('admin.position.add');

        Route::post('position/add', 'PositionController@store')->name('admin.position.add.post');

        Route::get('position/update/{model}', 'PositionController@update')->name('admin.position.update');

        Route::post('position/update/{model}', 'PositionController@doUpdate')->name('admin.position.update.post');



        Route::get('/job-category', 'JobCategoryController@index')->name('admin.jobCategory');

        
        Route::get('job-category/add', function () {
            return view('admin.job-category.add');
        })->name('admin.jobCategory.add');

        Route::post('job-category/add', 'JobCategoryController@store')->name('admin.jobCategory.add.post');

        Route::get('job-category/update/{model}', 'JobCategoryController@update')->name('admin.jobCategory.update');

        Route::post('job-category/update/{model}', 'JobCategoryController@doUpdate')->name('admin.jobCategory.update.post');

        Route::get('job-category/delete/{model}', 'JobCategoryController@delete')->name('admin.jobCategory.delete');







        Route::get('/job', 'JobController@index')->name('admin.job');


        Route::get('job/add', 'JobController@add')->name('admin.job.add');

        Route::post('job/add', 'JobController@store')->name('admin.job.add.post');

        Route::get('job/update/{model}', 'JobController@update')->name('admin.job.update');

        Route::post('job/update/{model}', 'JobController@doUpdate')->name('admin.job.update.post');
        Route::get('job/delete/{model}', 'JobController@delete')->name('admin.job.delete');


        
        
        Route::get('/user', 'UserController@index')->name('admin.user');

        Route::get('/user/chat/{model}', 'UserController@chat')->name('admin.user.chat');


        Route::get('user/add', function () {
            return view('admin.user.add');
        })->name('admin.user.add');

        Route::post('user/add', 'JobController@store')->name('admin.user.add.post');

        Route::get('user/update/{model}', 'UserController@update')->name('admin.user.update');

        Route::post('user/update/{model}', 'UserController@doUpdate')->name('admin.user.update.post');
        Route::get('user/delete/{model}', 'UserController@delete')->name('admin.user.delete');


        


        
        Route::post('ckeditor/upload', 'CkeditorController@upload')->name('ckeditor.upload');
    });
});
    
 