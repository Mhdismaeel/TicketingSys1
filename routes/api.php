<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
//Auth::routes(['verify' => true]);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:api'], function() {

    Route::post('UpdateUserRole','UsersController@UpdateUserRole');
    Route::get('DeleteUserRole/{id}','UsersController@DeleteUserRole');
});

Auth::routes();
Auth::routes(['verify' => true]);
//**************************users routing

Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');
Route::get('UserVirification/{email}','UsersController@VerificationUser');

//**teams routes */
Route::post('StoreNewTeam', 'TeamController@store');
Route::post('UpdateTeam/{slug}', 'TeamController@update');
Route::get('GetTeams', 'TeamController@index');
Route::get('GetTeam/{slug}', 'TeamController@show');
Route::get('deleteTeam/{slug}', 'TeamController@destroy');
Route::post('AddUserTeam', 'TeamUserController@store');
Route::post('UpdateUsetTeam/{teamid}', 'TeamUserController@update');
Route::get('getusersteam/{teamid}', 'TeamUserController@show');
Route::get('deleteteam/{teamid}', 'TeamUserController@destroy');
Route::get('GetTeamProject/{slug}', 'TeamController@GetTeamProject');

//*****************Project */
Route::get('GetAllProject', 'ProjectController@index');
Route::get('GetProject/{id}', 'ProjectController@show');
Route::get('DeleteProject/{id}', 'ProjectController@destroy');
Route::post('StoreProject', 'ProjectController@store');
Route::post('UpdateProject/{id}', 'ProjectController@update');
Route::get('GetProjectBoards/{id}', 'ProjectController@GetProjectBoards');
//*********************Board */
Route::post('StoreBoard', 'BoardController@store');
Route::post('UpdateBoard/{slug}', 'BoardController@update');
Route::get('GetBoardDetails/{slug}', 'BoardController@show');
Route::get('deleteBoard/{slug}', 'BoardController@destroy');
//*********Column */
Route::post('StoreColumn', 'ColumnController@store');
Route::get('GetColumn/{slug}', 'ColumnController@show');
Route::post('UpdateColumn/{slug}', 'ColumnController@update');
Route::get('deleteColumn/{slug}', 'ColumnController@destroy');
Route::get('GetColumnsBoard/{boaredid}', 'ColumnController@GetColumnsBoard');





