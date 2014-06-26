<?php

return array(
    'url' => 'http://localhost/meriel/public',
    'services' => array(
        '\Meriel\Routing\Router',
        '\Meriel\Http\Requests',
        '\Meriel\View\Views',
        '\Meriel\Http\Responses',
        '\Meriel\Database\Database'
    ),
    'aliases' => array(
        'App' => 'Meriel\Facades\App',
        'Route' => 'Meriel\Facades\Route',
        'Request' => 'Meriel\Facades\Request',
        'Response' => 'Meriel\Facades\Response',
        'View' => 'Meriel\Facades\View',
        'Config' => 'Meriel\Facades\Config',
        'DB' => 'Meriel\Facades\DB'
    )
);
