<?php

/*
 * |-------------------------------------------------------------------------- | Application Routes |-------------------------------------------------------------------------- | | Here is where you can register all of the routes for an application. | It's a breeze. Simply tell Laravel the URIs it should respond to | and give it the Closure to execute when that URI is requested. |
 */
Route::get('/', function () {
    return View::make('home');
});

// router for controller
// process filter

Route::filter('checkId', function ($route, $request, $param) {
    if ($param == 9) {
        return "Not compare";
    }
});
