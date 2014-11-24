<?php


Route::get("/test/:one/:two", function($one, $two){
  
	return View::make('users', array('one' => $one, 'two' => $two));
});

Route::get("/blog(/\d{4}(/\d{2}(/\d{2}(/[a-z0-9_-]+)?)?)?)?", "HomeController@showWelcome");

Route::post("/json", "HomeController@showJson");

Route::get("/admin(.*)", "HomeController@showAdmin");

Route::get("/", "HomeController@showWelcome");