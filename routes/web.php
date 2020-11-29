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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/','AdminController@index')->name('admin.dashboard');

});




Route::get('/products', 'ProductController@index');
Route::get('/products/create','ProductController@create');
Route::post('/products','ProductController@store');
Route::get('/products/{product}','ProductController@show');
Route::get('/products/{product}/edit','ProductController@edit');
Route::patch('/products/{product}','ProductController@update');
Route::delete('/products/{product}','ProductController@destroy');


Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');
Route::get('/private-policy','PagesController@policy');
Route::get('/product-list','PagesController@productList');
Route::get('/product-page/{product}','PagesController@productPage');
Route::get('/blog-list','PagesController@blogList');
Route::get('/single-blog/{blog}','PagesController@singleBlog');


Route::get('/blogs','BlogController@index');
Route::get('/blogs/create','BlogController@create');
Route::post('/blogs','BlogController@store');
Route::get('/blogs/{blog}','BlogController@show');
Route::get('/blogs/{blog}/edit','BlogController@edit');
Route::patch('/blogs/{blog}','BlogController@update');
Route::delete('/blogs/{blog}','BlogController@destroy');
