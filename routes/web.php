<?php

use App\Campsite;  


Route::get('/campsites', 'CampsitesController@index');
Route::post('/campsites', 'CampsitesController@store');
Route::get('/campsites/{campsite}', 'CampsitesController@show');
Route::put('/campsites/{campsite}', 'CampsitesController@update');

Route::get('/parks', 'ParksController@index');
Route::post('/parks', 'ParksController@store');
Route::get('/parks/{park}', 'ParksController@show');
Route::put('/parks/{park}', 'ParksController@update');


