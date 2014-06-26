<?php

class HomeController extends BaseController {



    public function showWelcome($a = null, $b = null) {

        if (Request::is('admin/*')) {
            echo "admin path found";
        }
        
      // $users = DB::table('users')->where('name','!=','Rob')->get();
       
        
      // var_dump(Request::uri());
      // var_dump(Request::path());

        return View::make('welcome' /*array('users' => $users)*/ );
    }

}