<?php

/*
 * This file is part of the Meriel package.
 *
 * (c) Stefano Anedda <dearste@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return array(
    'url' => 'http://meriel:8888',
    'services' => array(
        '\Meriel\Routing\Router',
        '\Meriel\Http\Requests',
        '\Meriel\View\Views',
        '\Meriel\Http\Responses',
        '\Meriel\Database\Database',
        '\Meriel\Database\Model'
    ),
    'aliases' => array(
        'App' => 'Meriel\Facades\App',
        'Route' => 'Meriel\Facades\Route',
        'Request' => 'Meriel\Facades\Request',
        'Response' => 'Meriel\Facades\Response',
        'View' => 'Meriel\Facades\View',
        'Config' => 'Meriel\Facades\Config',
        'DB' => 'Meriel\Facades\DB',
        'ORM' => 'Meriel\Database\Model'
    )
);
