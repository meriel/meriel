<?php


Route::get("/test/:one/:two", function($one, $two){
  
	return View::make('users', array('one' => $one, 'two' => $two));
});

Route::get("/home", "HomeController@showWelcome");

Route::get("/:what/:all", "HomeController@showWelcome");

Route::get("/", "HomeController@showWelcome");