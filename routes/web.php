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
    return redirect(route('box'));
});

Route::get('/box', 'BoxController')->name('box');
Route::post('/box/upload', 'Box\UploadController')->name('box.upload');
Route::get('/box/content_preview/{fileId}', 'Box\ContentPreviewController')->name('box.content_preview');
Route::post('/box/access_token', 'Box\AccessTokenController')->name('box.access_token');
