<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberConrtoller;
use App\Http\Controllers\CkeditorController;
use App\Mail\SampleMail;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return new SampleMail();
// });

Route::view('add','addmember');
Route::post('add',[MemberConrtoller::class,'addData']);
Route::get('list',[MemberConrtoller::class,'show']);
Route::get('edit/{id}',[MemberConrtoller::class,'showData']);
Route::post('edit',[MemberConrtoller::class,'update']);
Route::get('delete/{id}',[MemberConrtoller::class,'delete']);
Route::post('upload',[MemberConrtoller::class,'index']);
Route::view('upload','upload');
Route::resource('editor','App\Http\Controllers\CkeditorController');
Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');






