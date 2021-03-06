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

Route::get('get-old-data', 'AircallController@getOldData');

Route::get('/', 'CallsController@getReportingDetails');
Route::get('filter-calls/{date}/{number}', 'CallsController@getFilteredCalls');
Route::get('filter-graph/{date}/{number}', 'CallsController@getFilteredCallsGraph');
