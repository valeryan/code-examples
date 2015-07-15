<?php

namespace xmlfeed;

class Config
{
    public static $conf_array;
    /**
     * read a config item
     * @param  string $name identifier for config item
     * @return string
     */
    public static function read($name)
    {
        return self::$conf_array[$name];
    }
    /**
     * store a config item
     * @param  string $name  identifier for config item
     * @param  string $value value to store
     * @return void
     */
    public static function write($name, $value)
    {
        self::$conf_array[$name] = $value;
    }
}
