<?php

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


Route::group(['namespace' => 'site'], function (){
    
    Route::get('/', 'HomeController@index');
    Route::get('introduction', 'HomeController@introduction');
    // Route::get('hospital', 'HomeController@hospital');
    // Route::get('team', 'HomeController@team');
    // Route::get('partners', 'HomeController@partners');
    Route::get('charitydetail/{slug}', 'HomeController@charityDetail')->name('charitydetail');
    Route::get('charity', 'HomeController@charity');
    Route::get('activitiesinside/{slug}', 'HomeController@activitiesInside')->name('activitiesinside');
    Route::get('blogs', 'HomeController@blogs');
    Route::get('blog/news', 'HomeController@news');
    Route::get('blog/events', 'HomeController@events');
    Route::get('blog-detail/{slug}', 'HomeController@blogDetails')->name('blogdetail');
    Route::get('pages/{page}', 'HomeController@pages');
    Route::get('project/category/{slug}','HomeController@projectCategory');
    Route::get('project/category/{slug}/{id}','HomeController@projectCategoryDetail');
    Route::get('project/accomplished','HomeController@accomplished');
    Route::get('project/ongoing','HomeController@ongoing');
    Route::get('project/future','HomeController@future');
    Route::get('ajaxsearchproject','HomeController@ajaxproject');
    Route::get('ajaxcategoryproject','HomeController@ajaxprojectcategory');

});
 // Auth route
 Route::get('my-admin/login/', 'Auth\LoginController@showLoginForm')->name('login');
 Route::post('my-admin/login/', 'Auth\LoginController@login');
 
 // Password Reset Routes...
 Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
 Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
 Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
 Route::post('password/reset', 'Auth\ResetPasswordController@reset');


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'my-admin', 'middleware'   => ['auth','userrole']], function (){
	
	Route::get('register/', 'Auth\RegisterController@showRegistrationForm')->name('register');
	Route::get('user/list', 'admin\AdminLoginController@adminUserList')->name('user.list');
	Route::get('user/{id}/edit', 'admin\AdminLoginController@editUser')->name('user.edit');
	Route::any('updateuser/{id}', 'admin\AdminLoginController@updateuser')->name('user.update');
	Route::get('user/delete/{id}', 'admin\AdminLoginController@deleteUser')->name('user.delete');
		
	Route::post('register/', 'Auth\RegisterController@register');
    Route::resource('userdetail', 'admin\AdminUserDetailController');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');

    });
    Route::post('/home/profile/about/img', 'admin\AdminImageGalleryController@uploadImage');

Route::group(['prefix' => 'my-admin', 'middleware'   => 'auth'], function (){
    
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('dashboard', 'admin\AdminDashboardController@dashboard')->name('dashboard');

    //User Email Management
    Route::resource('useremail', 'admin\AdminUserMailAddController');
	Route::get('useremail/delete/{id}', 'admin\AdminUserMailAddController@destroy')->name('useremail.delete');
    
    //News and Events
    Route::resource('news-event', 'admin\AdminNewsEventController');
    Route::get('news-event/delete/{id}',  'admin\AdminNewsEventController@destroy')->name('news-event.delete');
  
    //Our Partners
    Route::resource('partners', 'admin\AdminOurPartnersController');
    Route::get('partners/delete/{id}',  'admin\AdminOurPartnersController@destroy')->name('partners.delete');
    
    //Pop Up 
    Route::resource('popup', 'admin\AdminPopUpController');
    Route::get('popup/delete/{id}',  'admin\AdminPopUpController@destroy')->name('popup.delete');

    //Pages
    Route::resource('pages', 'admin\AdminPagesController');
    Route::get('pages/delete/{id}',  'admin\AdminPagesController@destroy')->name('pages.delete');
    
    //Send Mail
    Route::resource('mail', 'admin\AdminSendMailController');
    Route::get('mail/delete/{id}',  'admin\AdminSendMailController@destroy')->name('mail.delete');
    
    //Projects
    Route::resource('project', 'admin\AdminProjectController');
    Route::get('project/delete/{id}',  'admin\AdminProjectController@destroy')->name('project.delete');
    Route::get('project-gallery/{id}', 'admin\AdminProjectController@galleryDestroy')->name('project.gallery.delete');
    
     //Charity Trek
     Route::resource('charity', 'admin\AdminCharityTrekController');
     Route::get('charity/delete/{id}',  'admin\AdminCharityTrekController@destroy')->name('charity.delete');
     Route::get('charity-gallery/{id}', 'admin\AdminCharityTrekController@galleryDestroy')->name('charity.gallery.delete');

     //Charity Trek Details
     Route::get('charity/list/{id}','admin\AdminCharityTrekController@charityDetail')->name('charity.detail');
     Route::get('charity/detail/create/{id}','admin\AdminCharityTrekController@charityDetailCreate')->name('charity.detail.create');
     Route::post('charity/detail/store/','admin\AdminCharityTrekController@charityDetailStore')->name('charity.detail.store');
     Route::get('charity/detail/{id}/edit/','admin\AdminCharityTrekController@charityDetailEdit')->name('charity.detail.edit');
     Route::patch('charity/detail/update/{id}','admin\AdminCharityTrekController@charityDetailUpdate')->name('charity.detail.update');
     Route::get('charity/detail/delete/{id}', 'admin\AdminCharityTrekController@charityDetailDestroy')->name('charity.detail.delete');

    // category
	Route::resource('category', 'admin\AdminCategoryController');
    Route::get('category/delete/{id}',  'admin\AdminCategoryController@destroy')->name('category.delete');

    // Program Description
    Route::resource('program', 'admin\AdminProgramController');
    Route::get('program/delete/{id}',  'admin\AdminProgramController@destroy')->name('program.delete');

     //Email category
	Route::resource('emailcategory', 'admin\AdminEmailCategoryController');
    Route::get('emailcategory/delete/{id}',  'admin\AdminEmailCategoryController@destroy')->name('emailcategory.delete');

    // Year
	Route::resource('year', 'admin\AdminYearController');
    Route::get('year/delete/{id}',  'admin\AdminYearController@destroy')->name('year.delete');

    //District
	Route::resource('district', 'admin\AdminDistrictController');
    Route::get('district/delete/{id}',  'admin\AdminDistrictController@destroy')->name('district.delete');
    
    //State
	Route::resource('state', 'admin\AdminStateController');
    Route::get('state/delete/{id}',  'admin\AdminStateController@destroy')->name('state.delete');
    
    
    //Image Gallary
    Route::get('image-gallery', 'admin\AdminImageGalleryController@index')->name('gallery.index');
    Route::post('image-gallery', 'admin\AdminImageGalleryController@upload')->name('gallery.upload');
    Route::get('image-gallery/{id}', 'admin\AdminImageGalleryController@destroy')->name('gallery.delete');

    //Video Gallary
    Route::get('video-gallery', 'admin\AdminVideoGalleryController@index')->name('video.gallery.index');
    Route::post('video-gallery', 'admin\AdminVideoGalleryController@upload')->name('video.gallery.upload');
    Route::get('video-gallery/{id}', 'admin\AdminVideoGalleryController@destroy')->name('video.gallery.delete');

    //User Profile
	Route::get('profile','admin\AdminProfileController@index')->name('user.profile');
    Route::post('profile','admin\AdminProfileController@update')->name('user.profile.update');

    //Menu Management
    Route::get('menu','admin\AdminMenuController@index')->name('menu');
    
});


