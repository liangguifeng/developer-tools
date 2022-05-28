<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'namespace'  => 'App\Http\Controllers',
], function () {
    // 登录
    Route::post('sql/format', 'SqlFormatController@sqlFormat');
});
