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




Route::get('/stocks/{stock}/create','StockController@userForm');




Route::get('/profile/info' , 'MypageController@show');

// Route::post('/profile/info', 'MypageController@store');


Route::post('/my' , 'MypageController@show');
// Route::post('/users/create', 'StockController@create');





// Route::get('/users/mypage',function(){
//   return view('/per-info'); 
// });




// Route::post('/stocks', 'StockController@imgStore');


// 決済ボタンを表示するページ
Route::get('/user/payment/form', 'getPaymentController@index')->name('index');

// Stripeの処理
Route::get('/payment', 'getPaymentController@payment')->name('payment');

// 決済完了ページ
Route::get('/user/payment/complete', 'getPaymentController@complete')->name('complete');





Route::get('/create', 'StockController@show');



//editのルーティング
Route::get('users/{stock}/edit', 'StockController@edit');














// Auth::routes();






