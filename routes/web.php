<?php

Route::get('/', 'ProjectController@getProjectDetails');



/**
 * Main
 */
Route::get('/admin', 'AuthController@index');

/**
 * Login & Registration
 */
Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin');
Route::get('registration', 'AuthController@registration');
Route::post('post-registration', 'AuthController@postRegistration');
Route::get('dashboard', 'AuthController@dashboard');
Route::get('logout', 'AuthController@logout');

Route::resource('project', 'ProjectController');
