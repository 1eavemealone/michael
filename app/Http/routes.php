<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('deskpad/baselogin');
});


Route::group(['prefix' => 'deskpad', 'namespace' => 'Deskpad'], function(){

/*for partner*/

Route::post('baselogin', 'PartnerController@CreateStudent');
Route::get('partners', 'PartnerController@createPartner');
Route::post('partners', 'PartnerController@createPartner');

});







