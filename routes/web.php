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

Route::get('/get-controlling-the-query-attributes-data', 'ControllingQueryController@controllingTheQuery')->name('controlling-the-query');

Route::get('/get-custom-column-attributes-data', 'CustomColumnController@customColumn')->name('custom-column');

Route::get('/get-relationship-column-attributes-data', 'RelationshipColumnController@relationshipColumn')->name('relationship-column');
