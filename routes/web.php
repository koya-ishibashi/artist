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

Route::get('/', 'StockController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('users/mypage', function () {
    return view('users/mypage');
});
Route::get('users/listing', 'StockController@userIndex');

Route::get('/users/create',function(){
   return view('users/create'); 
});

Route::post('/stocks', 'StockController@store');



