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
    return view('index');
});

//article
Route::get('/article', 'ArticlesController@index');
Route::get('/article/create','ArticlesController@create');
Route::post('/article/store','ArticlesController@store');
Route::get('/article/edit','ArticleController@edit');
Route::post('/article/update','ArticlesController@update');
Route::get('/article/delete/{id}','ArticlesController@destroy');
Route::get('/article/edit/{id}','ArticlesController@edit');

//catagory
Route::get('/catagory','CatagoriesController@index');
Route::get('/catagory/create','CatagoriesController@create');
Route::get('/catagory/edit/{id}','CatagoriesController@edit');
Route::post('/catagory','CatagoriesController@store');
Route::get('/catagory/delete/{id}','CatagoriesController@delete');
Route::post('update','CatagoriesController@update');



//user
Route::get('/user','UserController@index');
Route::get('/user/create','UserController@create');
Route::get('/user/edit','UserController@edit');


