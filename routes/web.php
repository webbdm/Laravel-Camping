<?php

use App\Campsite;  


Route::get('/campsites', 'CampsitesController@index');

Route::get('/campsites/{campsite}', 'CampsitesController@show');

Route::post('/parks', 'ParkController@store');

Route::get('/parks', 'ParkController@index');

