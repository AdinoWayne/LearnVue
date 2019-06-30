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

Route::get('stats', function () {
    return [
        'series' => 200,
        'lessions' => 1300
    ];
});
Route::get('achievenments', function() {
    return [
        "Start Your Enginer",
        "Chatty Cathy",
        "First Thousand",
        "One Year Member",
        "Laracast Tutor",
        "School in Session",
        "Welcome to the Community"
    ];
});