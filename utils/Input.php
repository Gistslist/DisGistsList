<?php
//
class Input
{
    public static function has($key)
    {
        if (!empty($_REQUEST[$key])){
            return true;
        } else {  
            return false;
        }
    }
//
    public static function get($key, $default = null)
    {
        if (!empty($_REQUEST[$key])){
            return $_REQUEST[$key];
        } else {
            return $default;
        }
    }
//
    public static function escape($input){
        return htmlspecialchars(strip_tags($input));
    }
//
    private function __construct() {}
}
