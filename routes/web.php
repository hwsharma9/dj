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

Auth::routes();

Route::get('/', 'FrontController@index');
Route::get('/shop', 'FrontController@shopPage');
Route::get('/product-details', 'FrontController@productDetailPage');
Route::get('/cart', 'FrontController@cartPage');

Route::prefix('/admin')->group(function () {
    // Route::get('/admin-login', 'UserLoginController@adminLoginPage');
    // Route::post('/admin-login-action', 'UserLoginController@adminLoginAction');

    Route::get('/dashboard', 'AdminController@index');
    // Route::get('/category-list', 'AdminController@categoryListPage');
    Route::get('category-tree-view',['uses'=>'CategoryController@manageCategory']);
	Route::post('add-category',['as'=>'add.category','uses'=>'CategoryController@addCategory']);

	Route::get('/add-product','ProductController@addProductPage');
	Route::post('/add-product',['as'=>'add.product','uses'=>'ProductController@addProductAction']);
});

Route::get('/home', 'HomeController@index')->name('home');
