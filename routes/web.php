<?php

use App\Campsite;  


Route::get('/campsites', 'CampsitesController@index');
Route::get('/campsites/{campsite}', 'CampsitesController@show');
Route::post('/campsites', 'CampsitesController@store');

Route::get('/parks', 'ParksController@index');
Route::get('/parks/{park}', 'ParksController@show');
Route::post('/parks', 'ParksController@store');


