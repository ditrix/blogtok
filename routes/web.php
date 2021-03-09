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
    return view('layout.site');
});

Route::get('/auth.login', 'Auth\LoginController@login')->name('auth.login');
Route::post('/auth.autentificate', 'Auth\LoginController@autentificate')->name('auth.autentificate');
Route::get('/auth.logout',  'Auth\LoginController@logout')->name('auth.logout');


//Route::get('/auth.register', function () { return view('auth.register'); })->name('auth.register');
Route::get('/auth.register', 'Auth\RegisterController@register')->name('auth.register');
Route::post('/auth.register', 'Auth\RegisterController@create')->name('auth.create');

Route::get('/user.index', function () { return view('user.index'); })->name('user.index');

