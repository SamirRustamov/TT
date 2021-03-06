<?php

namespace App\Middleware;

use Closure;
use TT\Engine\Http\Request;

class StartSession
{

    private $except = [
        //'api/.*'
    ];


    /**
     * @param Request $request
     * @param Closure $next
     * @return mixed
     * @throws \Exception
     */

    public function handle(Request $request, Closure $next)
    {
        if (!CONSOLE && !$this->isExcept($request)) {
            if (!$request->ajax()) {
                register_shutdown_function(static function () use ($request) {
                    $request->app('session')
                        ->set('_prev_url', $request->app('url')->getCurrent());
                });
            }

            $request->app('session')->start();
        }

        return $next($request);
    }


    protected function isExcept(Request $request): bool
    {
        if (!empty($this->except)) {
            $url = trim($request->url(), '/');
            foreach ($this->except as $value) {
                return preg_match("#^".trim($value, '/')."$#", $url);
            }
        }
        return false;
    }
}
