<?php
Route::get('jobs/store', [
	'as' => 'jobs_store_path',
	'uses' => 'JobsController@store'
]);
