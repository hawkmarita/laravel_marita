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
    return view('stwelcome');
});
//Route::post('/usender', 'usenderController@usenderFunc')->name('usender');
Route::get('/photogallery', 'InstController@insta');
//Route::get('/search', 'SrchController@srch');
Route::post('/search', 'SrchController@srch');

Route::get('/form', function () {
    return view('form');
});
Route::post('send-mail', 'MailSetting@send_form');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout','Auth/LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function(){
Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/', 'AdmController@adm')->name('admin.dashboard');
Route::get('/logout', 'AdminLoginController@logout')->name('admin.logout');
});