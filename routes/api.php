<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;


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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::get('data',[DummyAPI::class,'getData']);

Route::get('user',[UserController::class,'userData']);


Route::post('add',[UserController::class,'store']);

Route::put('update/{id}',[UserController::class,'update']);

Route::delete('delete/{id}',[UserController::class,'delete']);

Route::get('search/{user_name}/{email}',[UserController::class,'search']);

Route::post('upload',[UserController::class,'upload']);

Route::get('sendmail',[MailController::class,'sendmail']);

