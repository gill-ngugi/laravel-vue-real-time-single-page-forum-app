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

//This returns just one api route... The GET Route.
// Route::get('/question', 'QuestionController@index');

//To return all apis in the Question Controller
Route::apiResource('/questions', 'QuestionController');

Route::apiResource('/categories', 'CategoryController');

Route::apiResource('/questions/{question}/replies', 'ReplyController');

Route::get('all-likes/{reply}', 'LikeController@index');

Route::post('like/{reply}', 'LikeController@likeIt');

Route::delete('like/{reply}', 'LikeController@unLikeIt');