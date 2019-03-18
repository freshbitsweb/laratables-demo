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

Route::get('/', 'DataTableController@index')->name('home');

Route::get('/get-controlling-the-query-attributes-data', 'ControllingQuery@controllingTheQuery')->name('controlling_the_query');

Route::get('/get-custom-column-attributes-data', 'DataTableController@getCustomColumnAttributesData')->name('get_custom_column_attributes_data');
