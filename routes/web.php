<?php

use App\Campsite;  


Route::get('/campsites', 'CampsitesController@index');

Route::get('/campsites/{campsite}', 'CampsitesController@show');

Route::get('/parks', 'ParkController@index');

//Route::get('/park/{park}', '');