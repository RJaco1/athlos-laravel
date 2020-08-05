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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/public/registrarEmpleado', 'registrarEmpController@create')->name('registrarEmp.create');
Route::post('/public/registrarEmpleado', 'registrarEmpController@store')->name('registrarEmp.store');
Route::view('/public/registrarEmpleado', 'registrarEmp')->name('registrarEmp');

Route::get('/public/registrarAtleta', 'registrarAtlController@create')->name('registrarAtl.create');
Route::post('/public/registrarAtleta', 'registrarAtlController@store')->name('registrarAtl.store');
Route::view('/public/registrarAtleta', 'registrarAtl')->name('registrarAtl');

Route::get('/public/listaAtletas', 'registrarAtlController@index')->name('listaAtletas');

Route::get('/public/eventos', 'eventoController@index')->name('eventos');

Route::get('/public/nuevoEvento', 'eventoController@create')->name('nuevoEvento.create');
Route::post('/public/nuevoEvento', 'eventoController@store')->name('nuevoEvento.store');
Route::view('/public/nuevoEvento', 'nuevoEvento')->name('nuevoEvento');

Route::view('/public/login', 'login')->name('login');
Route::view('/public', 'inicio')->name('inicio');
Route::view('/public/perfiles', 'perfilAdmin')->name('perfiladmin');
//-----------------------------------------------------------------------------------------------
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::get('/home', 'HomeController@index')->name('home');
