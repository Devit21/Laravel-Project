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
 //Dashboard
Route::get('/admin', 'DashboardController@index');

//main source
Route::get('/main/product.html',['uses' => 'ProductController@index']);
Route::get('/main/product/create.html',['uses' => 'ProductController@create']);
Route::post('/main/product/store',['uses' => 'ProductController@store']);
Route::get ( '/main/product/edit/{id}', ['uses' => 'ProductController@edit' ]);
Route::post ( '/main/product/update', ['uses' => 'ProductController@update' ]);
Route::get ( '/main/product/delete/{id}', ['uses' => 'ProductController@destroy' ]);

// status


Route::get('/main/status.html',['uses' => 'StatusMainController@index']);
Route::get('/main/status/create.html',['uses' => 'StatusMainController@create']);
Route::post('/main/status/store',['uses' => 'StatusMainController@store']);
Route::get('/main/status/show/{id}',['uses' => 'StatusMainController@show']);
Route::get('/main/status/edit/{id}',['uses' => 'StatusMainController@edit']);
Route::post ('/main/status/update', ['uses' => 'StatusMainController@update']);
Route::get('/main/status/delete/{id}',['uses' => 'StatusMainController@destroy']);
Route::get('/main/status/search',['uses' => 'StatusMainController@search']);




