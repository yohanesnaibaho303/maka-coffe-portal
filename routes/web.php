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

Route::get('/', function () {
    return view('pages.homepage', [
        'title' => "Home"
    ]);
});

Route::get('/contact', function () {
    return view('pages.contact', [
        'title' => "Contact"
    ]);
});




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
