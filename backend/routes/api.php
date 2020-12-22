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



    Route::post('/send-mail', 'MailController@sendMail');

    Route::get('/sync-users', 'UserController@syncUsers');
    Route::get('/get-school-keys-for-login', 'MainController@getSchoolKeysForLogin');
    Route::get('/get-school-key-for-registration', 'MainController@getSchoolKeysForRegistration');
    Route::get('/comments/{commentable_type}/{commentable_id}', 'CommentController@getComments');
    Route::post('/comments/create', 'CommentController@saveComment');
    Route::delete('/comments/{id}', 'CommentController@deleteComment');

    // notifications
    Route::post('/notifications/file-uploaded', 'NotificationController@fileUploadedToNotification');
    Route::get('/notifications/mark-as-read/{username}/{id}', 'NotificationController@markAsRead');
    Route::delete('/notifications/{username}/{id}', 'NotificationController@delete');
    Route::get('/notifications/unread/{username}', 'NotificationController@getUnreadNotifications');
    Route::get('/notifications/read/{username}', 'NotificationController@getReadNotifications');
    Route::get('/notifications/all/{username}', 'NotificationController@getAllNotifications');
