<?php

return array(


    /*
    |--------------------------------------------------------------------------
    | Application environment mode; true -> DEVELOPMENT | false -> PRODUCTION
    |--------------------------------------------------------------------------
    |
    */


    'debug'  => setting('APP_DEBUG',false),


    /*
    |--------------------------------------------------------------------------
    | Default Locale
    |--------------------------------------------------------------------------
    |
    */

    'locale' => setting('LOCALE','en'),


    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    */

    'name' => setting('APP_NAME','TT'),




    /*
    |--------------------------------------------------------------------------
    | Application Base Url
    |--------------------------------------------------------------------------
    |
    */

    'url' => setting('URL','http://localhost:8000/'),



    /*
    |--------------------------------------------------------------------------
    | Application Encryption Key
    |--------------------------------------------------------------------------
    |
    */

    'key'  => setting('APP_KEY'),



);
