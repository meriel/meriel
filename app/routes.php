<?php
/*
 * This file is part of the Meriel package.
 *
 * (c) Stefano Anedda <dearste@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

Route::get("/", "HomeController@showWelcome");

/*
 * 
 * 
 * 
 
Route::get("/test/([0-9]*)/([0-9]*)", function($one, $two){
  
	return View::make('users', array('one' => $one, 'two' => $two));
});

Route::get("/blog(/\d{4}(/\d{2}(/\d{2}(/[a-z0-9_-]+)?)?)?)?", "HomeController@showBlog");

Route::post("/json", "HomeController@showJson");

Route::get("/admin(.*)", "HomeController@showAdmin");
 
 * 
 * 
 * 
 * 
 */