<?php
/*
 * This file is part of the Meriel package.
 *
 * (c) Stefano Anedda <dearste@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class HomeController extends BaseController
{

    public function showAdmin($vars)
    {

        /*for($i=1; $i <=10;$i++):

             $user =  new User;
             $user->name = 'John Doe ' . $i;
             $user->age = 2*$i;
             $user->save();

         endfor;*/

        //$user = User::delete(5);


        return "@showAdmin";

    }


    public function showJson()
    {


        return array('user' => 'Ste');

    }

    public function showBlog($vars)
    {
        var_dump($vars);
    }

    public function showWelcome()
    {
        //echo "@showWelcome";

        if (Request::is('admin/*')) {
            echo "admin path found";
        }

        //$users = DB::table('user')->where('name', '!=', 'Alex')->get();
        //var_dump($users);


        //$home = new HomeModel();
        //$home->street = 'xxxxx';
        //var_dump($home);

        //$users = User::all();
        //  foreach($users as $user){
        //     echo $user->name;
        //     echo "<br>";
        //  }


        //  $user = User::find(2);
        // var_dump($phone = $user->phone->model);
        //   $city = City::find(2);
        //var_dump( $city->user->name );
        /*
        
        $user = User::find(1);
        var_dump($phone = $user->phone->model);

        var_dump( User::count() );*/


        /*$user =  new User;

        $user->name = 'John Doe';
        $user->age = 100;

        $user->save();*/


        //$user = User::find(1);

        //$user->name = 'Alex';
        //$user->save();


        return View::make('welcome');
    }

}