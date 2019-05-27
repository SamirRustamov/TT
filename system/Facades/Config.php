<?php namespace System\Facades;
/**
 * @package	TT
 * @author  Samir Rustamov <rustemovv96@gmail.com>
 * @link https://github.com/srustamov/TT
 */

class Config extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'config';
    }
}