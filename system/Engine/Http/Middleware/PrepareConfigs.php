<?php


namespace System\Engine\Http\Middleware;

use System\Engine\App;
use System\Engine\Config;
use System\Engine\Http\Request;
use System\Engine\Load;

class PrepareConfigs
{

    public function handle(Request $request, \Closure $next)
    {
        $configurations = [];

        $configs_path       = rtrim(App::instance()->configs_path(),DIRECTORY_SEPARATOR);

        $configs_cache_file = App::instance()->configs_cache_file();

        if(file_exists($configs_cache_file))
        {
            $configurations = require_once $configs_cache_file;
        }
        else
        {
            foreach (glob($configs_path.DIRECTORY_SEPARATOR.'*') as $file) {
                $configurations[pathinfo($file ,PATHINFO_FILENAME)] = require_once $file;
            }
        }

        Load::register('config',new Config($configurations));

        return $next($request);

    }

}