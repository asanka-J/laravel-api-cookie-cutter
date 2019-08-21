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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/people', 'PeopleController@index');
// Route::get('/people/{people}', 'PeopleController@show');

Route::prefix('v1')->group(function () {
    Route::apiResource('/people', 'Api\v1\PeopleController');
    
});

Route::prefix('v2')->group(function () {
    Route::apiResource('/people', 'Api\v2\PeopleController');
    
});