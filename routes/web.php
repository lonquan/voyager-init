<?php

use App\Http\Controllers\IndexController;

Route::get('/', IndexController::class);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
