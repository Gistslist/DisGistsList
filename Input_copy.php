<?php

class Input
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        if(!empty($_REQUEST[$key])){
            return true;
        }else{
            return false;
        
        }
    }

    public static function getString($key)
    {
        $value = static::get($key);
        
            if (!is_string($value)) {
            throw new Exception('must be a string!');
            }
            
            if(is_numeric($value)){
                throw new Exception('cannot contain a number!');
            }
            
            $min = (strlen($key)< 3);
            
            if($min){
                throw new InvalidArgumentException('string is too short!');
            }

        return $value;
    }

    public static function getNumber($key)
    {
         $value = static::get($key);

         if (!is_numeric($value)) {
        throw new Exception('must be a number!');
    }

        return $value;
    }

    public static function getDate($key)
    {
        $value = static::get($key);
        $format = 'Y-m-d';

        $date = DateTime:: createFromFormat($format, $value);

        if($dateObject){

            return $dateObject->date;
        }else{
            throw new Exception('this must be a valid date');
        }
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        if (!empty($_REQUEST[$key])) {
            return self::escape($_REQUEST[$key]);
        }else{
            return $default;
        }
    }   // TODO: Fill in this function

    public static function escape($input){
        return htmlspecialchars(strip_tags($input));
    }

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}
