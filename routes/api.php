<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ProductController;
use app\Http\Controllers\Authcontroller;


Route::POST('register' , "AuthController@register");
Route::POST('login' , "AuthController@login");

//Private Routes
Route::group(['middleware'=>['auth:sanctum']] , function(){
    Route::resources([

        "Products"=>"ProductController"
    ]);
    Route::POST('logout' , "AuthController@logout");

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
