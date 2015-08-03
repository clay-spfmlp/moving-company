<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ScheduleController@index');
Route::get('schedule/create', ['as' => 'schedule.create', 'uses' => 'ScheduleController@create']);
Route::post('schedule/store', ['as' => 'schedule.store', 'uses' => 'ScheduleController@store']);
Route::post('set/truck/{crew_id}', ['as' => 'set.truck', 'uses' => 'ScheduleController@setTruck']);
Route::post('set/mover/{crew_id}', ['as' => 'set.mover', 'uses' => 'ScheduleController@setMover']);

Route::resource('trucks', 'TruckController');
Route::resource('crews', 'CrewController');
Route::resource('movers', 'MoverController');
