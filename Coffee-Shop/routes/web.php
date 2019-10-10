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
Route::get ( '/main/product/show/{id}', ['uses' => 'ProductController@show' ]);
Route::get ( '/main/product/edit/{id}', ['uses' => 'ProductController@edit' ]);
Route::post ( '/main/product/update', ['uses' => 'ProductController@update' ]);

