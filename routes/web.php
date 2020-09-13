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
    return view('auth.login');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('admin/cabinet', function(){
      return view('cabinet');
});

Route::get('profile', function(){
      return view('profile');
});
Route::get('support', function(){
      return view('support');
});

Route::get('/advertisingmedium', 'AdevrisingMediumController@index');

Auth::routes();

Route::get('/admin/userpoint', 'UserPointController@index')->name('userpoint');

Route::get('/home', 'HomeController@index')->name('home');



Route::post('/someurl', 'SomeurlController@index');
