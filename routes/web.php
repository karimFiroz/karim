<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index')->name('index');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contact', 'PagesController@contact')->name('contact');






Route::get('/all_products', 'ProductController@all_products')->name('all_products');
Route::get('/product', 'ProductController@product')->name('product');



Route::get('/products', 'ProductController@products')->name('products');

Route::get('/create', 'ProductController@create')->name('create');
Route::post('/store', 'ProductController@store')->name('store');


Route::get('/edit/{id}', 'ProductController@edit')->name('edit');
Route::post('/update/{id}', 'ProductController@update')->name('update');
Route::post('/delete/{id}', 'ProductController@delete')->name('delete');


Route::get('/login','AuthController@showLoginForm')->name('login');
Route::post('/login','AuthController@processLogin');


Route::get('/register','AuthController@showRegisterForm')->name('register');
Route::post('/register','AuthController@processRegister');


Route::get('/profile','AuthController@showProfile')->name('profile');
Route::get('/logout','AuthController@logout')->name('logout');

