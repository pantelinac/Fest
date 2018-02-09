<?php

Route::group(['module' => 'Admin', 'middleware' => ['api'], 'namespace' => 'App\Modules\Admin\Controllers'], function() {

    Route::resource('Admin', 'AdminController');
    Route::get('Admin/{Admin}/list', ['uses' => 'AdminController@list', 'as' => 'Admin.list']);
});
