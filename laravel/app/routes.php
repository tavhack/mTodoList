<?php

/*
 * |-------------------------------------------------------------------------- | Application Routes |-------------------------------------------------------------------------- | | Here is where you can register all of the routes for an application. | It's a breeze. Simply tell Laravel the URIs it should respond to | and give it the Closure to execute when that URI is requested. |
 */
Route::get ( '/', function () {
    return View::make ( 'hello' );
} );

// Route::get("hop",function(){
// $title = 'Hello';
// $data = array(
// 'title'=> $title,
// 'id' => 10,
// 'name' => 'Hop Vu',
// 'skill'=> 'PHP',
// 'address'=> 'Ho Chi Minh'
// );

// return View::make("hop.index",$data);
// });

// router for controller
// process filter

Route::filter ( 'checkId', function ($route, $request, $param) {
    if ($param == 9) {
        return "Not compare";
    }
} );

Route::get ( "hop", "HopController@index" );
Route::get ( "hop/create", "HopController@create" );
Route::get ( "hop/show/{id}", array (
        "as" => "show",
        // check filter
//         "before" => "checkId:" . $_GET ['id'] . "",
        "uses" => "HopController@show" 
) );
   