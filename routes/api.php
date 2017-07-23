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

/**
 * Routes to controllers resources
 */
Route::resource('album', 'AlbumController');
Route::resource('artist', 'ArtistController');
Route::resource('condition', 'ConditionController');
Route::resource('image', 'ImageController');
Route::resource('media_type', 'MediaTypeController');
Route::resource('rating', 'RatingController');
Route::resource('role', 'RoleController');
Route::resource('user', 'UserController');



