<?php

Route::group(['domain' => config('vishnu.app_host')], function () {
    Route::auth();

    Route::get('/', 'HomeController@index');
});
