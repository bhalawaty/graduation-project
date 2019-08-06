<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Api'],function (){

    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');

    Route::get('questionnaires/{subject}','QuestionnairesController@show');
    Route::post('questionnaires','QuestionnairesController@store');


    Route::get('subjects', 'SubjectsController@index');
    Route::get('subjects/{doctor}', 'SubjectsController@show');

    Route::resource('complains', 'ComplainsController');

    Route::get('departments/{department}/doctors','DoctorsController@show');

    Route::get('departments/{department}/complains','ComplainsController@show');


    Route::group(['namespace' => 'Managers','prefix' => 'managers'],function (){

        Route::post('login', 'AuthController@login');

    });

});
