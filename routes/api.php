<?php

use Illuminate\Http\Request;

Route::group(['middleware' => 'api'], function () {
    Route::resource('tasks',  'TaskController');
});

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});