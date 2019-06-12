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

Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/register', 'Auth\RegisterController@create')->name('register');
Route::middleware('auth:api')->group(function () {
    Route::delete('/logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('/me', function (Request $request) {
        return $request->user();
    });
    Route::get('/permission', 'API\PermissionController@getCurrentUserPermissions')->name('user.permission');
});
