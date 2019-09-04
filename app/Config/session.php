<?php

return array(

    /*
    |---------------------------------------------------------
    | Session Driver
    |---------------------------------------------------------
    |
    | Driver use database|file|redis
    |
    | Important! if using "database" run "php manage session:table --table=tablename" command on command line
    | 
    |
    */
    'driver'          => setting('SESSION_DRIVER'),


    /*
    |---------------------------------------------------------
    | Session Files Location
    |---------------------------------------------------------
    */
    'files_location'   => path('storage/sessions'),



    /*
    |---------------------------------------------------------
    |  Session Database Table
    |---------------------------------------------------------
    */

    'table'          => 'sessions',



    /*
    |--------------------------------------------------------------------------
    | Session Lifetime
    |--------------------------------------------------------------------------
    |
    */

    'lifetime'        => 3600,


    /*
    |--------------------------------------------------------------------------
    | Session Regenerate id
    |--------------------------------------------------------------------------
    |
    */

    'regenerate'        => false,


    /*
    |--------------------------------------------------------------------------
    | Cookies
    |--------------------------------------------------------------------------
    */

    'only_cookies' => true,



    'cookie' => array(

        'name' => 'tt_session',

        'path' => '/',

        'secure' => false,

        'domain' => '',

        'http_only' => true,

    ),





);
