<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'api'], function () {

    Route::group(['prefix' => 'mobile'], function () {

        Route::post('post', 'AllPostController@postAll');
        Route::post('post/{id}', 'AllPostController@postId')->where('id', '[0-9]+');
        Route::post('categories', 'AllCategoriesController@categoriesAll');
        Route::post('categories/{id}', 'AllCategoriesController@categoriesId')->where('id', '[0-9]+');
    
    });
    
    Route::group(['prefix' => 'web'], function () {
    });
    
    Route::group(['prefix' => 'teltgram'], function () {
    });

});