<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

// User Routes
Route::group(['namespace' => 'User'],function(){
	Route::get('/','HomeController@index')->name('post');
	Route::get('post/{post}','PostController@post')->name('post');

	Route::get('post/tag/{tag}','HomeController@tag')->name('tag');
	Route::get('post/category/{category}','HomeController@category')->name('category');
    //Photo Routes
	Route::get('submitPhoto','PhotoController@submitPhoto')->name('submitPhoto');
	Route::post('store','PhotoController@store')->name('photo.store');
	Route::post('termsUpdate','PhotoController@termsUpdate')->name('photo.termsUpdate');
	Route::get('photo/{id}/download','PhotoController@download')->name('photo.download');
    //Profile Routegit add .s
	Route::get('profile/{id}','ProfileController@profile')->name('profile.profile');
	Route::get('profileEdit/{id}','ProfileController@profileEdit')->name('profile.profileEdit');
	Route::post('update/{id}','ProfileController@update')->name('profile.update');
	Route::post('updateAvatar','ProfileController@updateAvatar')->name('profile.updateAvatar');
	//PasswordChange Routes
	Route::get('changePassword','ProfileController@showChangePasswordForm');
	Route::post('changePassworded','ProfileController@changePassword')->name('changePassword');
	//Search Routes
	Route::get('/search', 'SearchController@index')->name('search');

	//vue routes
	Route::post('getPosts','PostController@getAllPosts');
	Route::post('saveLike','PostController@saveLike');
});

//Admin Routes
Route::group(['namespace' => 'Admin'],function(){
	Route::get('admin/home','HomeController@index')->name('admin.home');
	// Users Routes
	Route::resource('admin/user','UserController');
	// Roles Routes
	Route::resource('admin/role','RoleController');
	// Permission Routes
	Route::resource('admin/permission','PermissionController');
	// Post Routes
	Route::resource('admin/post','PostController');
	// Tag Routes
	Route::resource('admin/tag','TagController');
	// Category Routes
	Route::resource('admin/category','CategoryController');
	// Admin Auth Routes
	Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('admin-login', 'Auth\LoginController@login');
	
});


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');
