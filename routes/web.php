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

Route::get('/emergency', 'CloudwatchLogsController@emergency');
Route::get('/alert', 'CloudwatchLogsController@alert');
Route::get('/critical', 'CloudwatchLogsController@critical');
Route::get('/error', 'CloudwatchLogsController@error');
Route::get('/warning', 'CloudwatchLogsController@warning');
Route::get('/notice', 'CloudwatchLogsController@notice');
Route::get('/info', 'CloudwatchLogsController@info');
Route::get('/debug', 'CloudwatchLogsController@debug');