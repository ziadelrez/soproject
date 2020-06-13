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

//to create a new route view path we should go to route service providers and add the new name

Route::get('/admin', function () {
    return 'Hello Admin';
});

