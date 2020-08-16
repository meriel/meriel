<?php

namespace App\Controllers;

use Request;
use View;

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


    public function showJson()
    {

        return array('user' => 'Ste');

    }


    public function showWelcome()
    {

        if (Request::is('admin/*')) {
            echo "admin path found";
        }

        return View::make('welcome');
    }

}