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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Auth::routes();
/*home [/]*/
Route::get('/', function () {return view('blank');});
/*media*/
Route::get('/media', function () {return view('media');})->name('media');
/*home*/
Route::get('/home', 'HomeController@index')->name('home');
/*User Controller*/
Route::resource('/user', 'UserController');
Route::post('/user-list', 'UserController@list')->name('user.list');
