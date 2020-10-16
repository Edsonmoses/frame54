<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    // Ignores notices and reports all other kinds... and warnings
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    // error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
    }

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


// User Routes
Route::group(['namespace' => 'User'],function(){
    Route::get('/','HomeController@index')->name('post');
    Route::get('frame','HomeController@home')->name('post');
    Route::get('post/{post}','PostController@post')->name('post');
    Route::get('guidelines','HomeController@guidelines')->name('home.guidelines');
    Route::get('license','HomeController@framelicense')->name('home.framelicense');
    Route::get('policy','HomeController@framePolicy')->name('home.framePolicy');
    Route::get('conditions','HomeController@conditions')->name('home.conditions');
    Route::get('about','HomeController@about')->name('home.about');
    Route::get('faq','HomeController@faq')->name('home.faq');
    Route::get('team','HomeController@team')->name('home.team');
    Route::get('developers','HomeController@developers')->name('home.developers');
    Route::get('press','HomeController@press')->name('home.press');
    Route::get('help','HomeController@help')->name('home.help');
    Route::get('security','HomeController@security')->name('home.security');
    Route::get('home/download/{id}','HomeController@download')->name('home.download');
    Route::get('home/likes/{like}','HomeController@likes')->name('home.likes');
    Route::get('artists/{posted_by}','HomeController@artists')->name('home.artists');

	Route::get('post/tag/{tag}','HomeController@tag')->name('tag');
	Route::get('post/category/{category}','HomeController@category')->name('category');
    //Photo Routes
	Route::get('submitPhoto','PhotoController@submitPhoto')->name('submitPhoto');
	Route::post('store','PhotoController@store')->name('photo.store');
    Route::post('termsUpdate','PhotoController@termsUpdate')->name('photo.termsUpdate');
    Route::post('agree','PhotoController@agreeUpdate')->name('photo.agreeUpdate');
    Route::get('photo/download/{id}','PhotoController@download')->name('photo.download');
    Route::get('uguideline','PhotoController@uguideline')->name('photo.uguideline');
    Route::post('likeUpdate/{id}','PostController@likeUpdate')->name('post.likeUpdate');
    Route::post('follow', 'PostController@follwUserRequest')->name('follow');

    //Profile Routegit add .s
    Route::get('profile/{id}','ProfileController@profile')->name('profile.profile');
    Route::get('analytics/{id}','ProfileController@analytics')->name('profile.analytics');
    Route::get('settings/{id}','ProfileController@settings')->name('profile.settings');
    Route::get('emailSetting/{id}','ProfileController@emailSetting')->name('profile.emailSetting');
    Route::get('connect/{id}','ProfileController@connect')->name('profile.connect');
    Route::get('applications/{id}','ProfileController@applications')->name('profile.applications');
    Route::get('close/{id}','ProfileController@close')->name('profile.close');
    Route::get('following/{id}','ProfileController@following')->name('profile.following');
	Route::get('edit/{id}','ProfileController@edit')->name('profile.edit');
    Route::post('updated/{id}','ProfileController@updated')->name('profile.updated');
    Route::post('update','ProfileController@updated')->name('profile.update');
    Route::post('updateAvatar','ProfileController@updateAvatar')->name('profile.updateAvatar');
    Route::post('updateEmail','ProfileController@updateEmail')->name('profile.updateEmail');
     //Collections
    Route::get('collections/{id}','ProfileController@collections')->name('profile.collections');
    Route::get('community/{id}','ProfileController@community')->name('profile.community');
	//PasswordChange Routes
	Route::get('changePassword','ProfileController@showChangePasswordForm');
    Route::post('changePassworded','ProfileController@changePassword')->name('changePassword');
    Route::post('close/{id}','ProfileController@closed')->name('closed');
	//Search Routes
	Route::get('/search', 'SearchController@index')->name('search');
    Route::get('user/verify/{token}', 'Auth\RegisterController@verifyUser');
     //Dark and light mode
     Route::post('darktheme/{id}','ThemeController@storeDark')->name('theme.storeDark');
     Route::post('lighttheme/{id}','ThemeController@storeLight')->name('theme.storeLight');

     Route::get('multifileupload', 'HomeController@multifileupload')->name('multifileupload');
     Route::post('multifileupload', 'HomeController@store')->name('multifileupload');

	//vue routes
	Route::post('getPosts','PostController@getAllPosts');
    Route::post('saveLike','PostController@saveLike');


});

 //Socialite
 Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
 Route::get('login/{provider}/callback','Auth\LoginController@handleProviderCallback');

 //Route::get('auth/social', 'Auth\LoginController@show')->name('social.login');
 //Route::get('oauth/{driver}', 'Auth\LoginController@redirectToProvider')->name('social.oauth');
 //Route::get('oauth/{driver}/callback', 'Auth\LoginController@handleProviderCallback')->name('social.callback');


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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('users', 'HomeController@users')->name('users');

Route::get('user/{id}', 'HomeController@user')->name('user.view');

Route::post('ajaxRequest', 'HomeController@ajaxRequest')->name('ajaxRequest');
