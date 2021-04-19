<?php

use Illuminate\Support\Facades\Route;

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

Route::get('phpinfo', function () {
    return phpinfo();
});

Route::get('ip', 'App\Http\Controllers\FunctionController@ip');

Route::get('palindrom/{text}', 'App\Http\Controllers\FunctionController@palindrom')->middleware('IPAccess');