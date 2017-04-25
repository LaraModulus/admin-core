<?php

Route::group([
	'prefix' => 'admin',
	'middleware' => ['web'],
	'namespace' => 'LaraMod\Admin\Core',
	], function(){
		Route::get('/', ['as' => 'admin', 'uses' => 'AdminCoreController@index']);
		Route::get('login', ['as' => 'admin.login', 'uses' => 'AdminCoreController@getLogin']);
		Route::post('login', ['as' => 'admin.login', 'uses' => 'AdminCoreController@postLogin']);
		Route::get('logout', ['as' => 'admin.logout', 'uses' => 'AdminCoreController@logout']);
		
	});
