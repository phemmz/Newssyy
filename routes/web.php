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
Route::get('/', 'ApiController@getNewsSources');
Route::get('/news/{source_id}', 'ApiController@getNews');
Route::post('/searchNewsSources', 'ApiController@searchNewsSources');
Route::post('/searchNews/{source_id}', 'ApiController@searchNews');
