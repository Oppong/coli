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

Route::get('/', function () {
    return view('welcome');
});


//------------------------ Pages Controllers --------------------------//

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::post('/contact', 'PagesController@store');
Route::get('/products', 'PagesController@products');
Route::get('/gallery', 'PagesController@gallery');








//----------------------------------- Authentication routes ---------------------------//

Auth::routes(['verify' => true]); 

Route::get('/home', 'HomeController@index')->name('home');



//----------------------------- blog Controllers ----------------------//

Route::get('/posts', 'PostController@index');
Route::get('/posts/{post}', 'PostController@show')->name('post.show');
Route::get('/cats/{category}', 'CatsController@show');
Route::post('/comments/{post_id}', 'CommentController@store');
Route::post('/reply/{comment_id}', 'ReplyController@store');

//--------------------------- Admin Controllers ------------------------//

// The controllers is for the admin login and admin dashboard 

Route::prefix('admin')->group(function() {

	Route::get('/login', 'AdminLoginController@adminLoginForm')->name('admin.login');
    Route::post('/login', 'AdminLoginController@adminstore')->name('admin.store');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::resource('/users', 'UsersController');   
    Route::resource('/slider', 'SliderController');   
    Route::resource('/cats', 'CategoryController');   
    Route::resource('/blogs', 'BlogController');   
    Route::resource('/gallery', 'GalleryController');   
    Route::resource('/adminsettings', 'AdminSettingsController');   
    Route::resource('/settings', 'SettingsController');   


});