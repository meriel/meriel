<?php


Route::get("/test/:one/:two", function($one, $two){
  
	return View::make('users', array('one' => $one, 'two' => $two));
});

Route::get("/:what/:all", "HomeController@showWelcome");

Route::get("/", "HomeController@showWelcome");