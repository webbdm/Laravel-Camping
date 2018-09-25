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

Route::get('/posts', 'PostsController@index');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
Route::put('/posts/{post}', 'PostsController@update');
Route::delete('/posts/{post}', 'PostsController@destroy');

Route::get('/jobs', 'JobsController@index');

Route::get('/skillsets', 'SkillsetsController@index');
Route::get('/skillsets/{skillset}', 'SkillsetsController@show');

Route::get('/resumes', 'ResumesController@index');
Route::get('/resumes/{resume}', 'ResumesController@show');