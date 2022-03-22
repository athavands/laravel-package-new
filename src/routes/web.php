<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\StorageSaveController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'Athavands\Contact\Http\Controllers'],function(){
    Route::get('contact','ContactController@index')->name('contact');

    Route::post('contact','ContactController@send');
    Route::get('name','VithushanController@index');

    Route::get('/saveimg','StorageSaveController@img');
    Route::post('/','StorageSaveController@store')->name('store');


});

