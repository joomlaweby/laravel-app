<?php

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

Auth::routes();

Route::get('/', 'ArticleController@index');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/contact', 'PagesController@contact')->name('contact');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('articles', 'ArticleController');

Route::resource('comments', 'CommentController');

Route::resource('users', 'UserController');

Route::resource('pages', 'PageController');

Route::resource('categories', 'CategoryController');

Route::resource('configuration', 'ConfigurationController');

Route::resource('tags', 'TagController');

Route::resource('admin/tags', 'TagController');
