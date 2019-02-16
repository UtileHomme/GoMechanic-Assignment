<?php

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

Route::get('uploads','UploadController@showUploadForm')->name('upload.file');
Route::post('uploads','UploadController@storeFile')->name('upload.files');

Route::get('uploadDrag','UploadController@showUploadFormDragAndDrop')->name('upload.filesshow');
Route::post('uploadDrag','UploadController@showFile')->name('upload.filesshow');

