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

//Auth::routes();
	Route::get('login','Auth\LoginController@showLoginForm');
	Route::post('login','Auth\LoginController@login')->name('loginuser');
	Route::post('logout','Auth\LoginController@logout');
	Route::post('password/email','Auth\ForgotPasswordController@sendResetLinkEmail');
	Route::get('password/reset','Auth\ForgotPasswordController@showLinkRequestForm');
	Route::post('password/reset','Auth\ResetPasswordController@reset');
	Route::get('password/reset/{token}','Auth\ResetPasswordController@showResetForm');
	Route::get('register','Auth\RegisterController@showRegistrationForm');
	Route::post('register','Auth\RegisterController@register');
//customer
Route::get('customer_login','CustomerAuth\LoginController@showLoginForm');
Route::post('customer_login','CustomerAuth\LoginController@login')->name('logincustomer');
Route::post('customer_logout','CustomerAuth\LoginController@logout');
Route::post('customer_password/email','CustomerAuth\ForgotPasswordController@sendResetLinkEmail');
Route::get('customer_password/reset','CustomerAuth\ForgotPasswordController@showLinkRequestForm');
Route::post('customer_password/reset','CustomerAuth\ResetPasswordController@reset');
Route::get('customer_password/reset/{token}','CustomerAuth\ResetPasswordController@showResetForm');
Route::get('customer_register','CustomerAuth\RegisterController@showRegistrationForm');
Route::post('customer_register','CustomerAuth\RegisterController@register');
//admin
Route::get('admin_login','AdminAuth\LoginController@showLoginForm');
Route::post('admin_login','AdminAuth\LoginController@login')->name('loginadmin');
Route::post('admin_logout','AdminAuth\LoginController@logout');
Route::post('admin_password/email','AdminAuth\ForgotPasswordController@sendResetLinkEmail');
Route::get('admin_password/reset','AdminAuth\ForgotPasswordController@showLinkRequestForm');
Route::post('admin_password/reset','AdminAuth\ResetPasswordController@reset');
Route::get('admin_password/reset/{token}','AdminAuth\ResetPasswordController@showResetForm');
Route::get('admin_register','AdminAuth\RegisterController@showRegistrationForm');
Route::post('admin_register','AdminAuth\RegisterController@register');

//commmon form
Route::get('userlogin','LoginController@showLoginForm');
Route::post('userlogin','LoginController@login');

Route::get('/home', 'HomeController@index');
Route::get('/admin_home', 'AdminHomeController@index');
Route::get('/customer_home', 'CustomerHomeController@index');
