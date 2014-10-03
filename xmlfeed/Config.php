<?php
class Config
{
    static $conf_array;

    public static function read($name)
    {
        return self::$conf_array[$name];
    }

    public static function write($name, $value)
    {
        self::$conf_array[$name] = $value;
    }
}
// db config
Config::write('db.host', '123.123.123.123');
Config::write('db.port', '3306');
Config::write('db.basename', 'testdatabase');
Config::write('db.user', 'testuser');
Config::write('db.password', 'testuserpass');

// end of file Config.php
