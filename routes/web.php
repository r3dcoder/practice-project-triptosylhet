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

Route::get('/', 'PublicController@index')->name('index');
Route::get('post/{post}', 'PublicController@singlePost')->name('singlePost');
Route::get('about', 'PublicController@about')->name('about');
Route::get('contact', 'PublicController@contact')->name('contact');
Route::get('slidePhoto', 'PublicController@slidePhoto')->name('slidePhoto');
Route::get('carRent', 'PublicController@carRent')->name('carRent');
Route::post('bookedCar/new', 'PublicController@bookedCar')->name('bookedCar');
Route::get('roomBook', 'PublicController@roomBook')->name('roomBook');
Route::post('roomBooked', 'PublicController@roomBooked')->name('roomBooked');






//Route::get('home', 'PublicController@index')->name('dashboard');
//Route::get('dashboard', 'HomeController@index')->name('dashboard');



Route::post('contact', 'PublicController@contactPost');



Auth::routes();

Route::prefix('user')->group(function (){

    Route::get('dashboard', 'UserController@dashboard')->name('userDashboard');
    Route::post('comment/{id}/delete', 'UserController@deleteComment')->name('deleteComment');
    Route::get('comments', 'UserController@comments')->name('userComments');
    Route::get('profile', 'UserController@profile')->name('userProfile');
    Route::post('profile', 'UserController@profilePost')->name('userProfilePost');



});

Route::prefix('author')->group(function (){

    Route::get('dashboard', 'AuthorController@dashboard')->name('authorDashboard');
    Route::get('posts', 'AuthorController@posts')->name('authorPosts');
    Route::get('comments', 'AuthorController@comments')->name('authorComments');
    Route::get('posts/new', 'AuthorController@newPost')->name('newPost');
    Route::get('posts/{id}/edit', 'AuthorController@postEdit')->name('postEdit');
    Route::post('posts/{id}/edit', 'AuthorController@postEditPost')->name('postEditPost');
    Route::post('posts/{id}/delete', 'AuthorController@deletePost')->name('deletePost');


    Route::post('posts/new', 'AuthorController@createPost')->name('createPost');





});


Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::prefix('admin')->group(function(){

    Route::get('/dashboard', 'AdminController@dashboard')->name('adminDashboard');
//    Route::get('/posts', 'AdminController@posts')->name('adminPosts');
    Route::get('/comments', 'AdminController@comments')->name('adminComments');
    Route::get('/users', 'AdminController@users')->name('adminUsers');

    Route::get('/users', 'AdminController@users')->name('adminUsers');

    Route::get('/posts', 'AdminController@cars')->name('adminPosts');
    Route::get('/roomreseve', 'AdminController@rooms')->name('adminRoom');








});
