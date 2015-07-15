<?php

namespace xmlfeed;

use xmlfeed\Config;
use PDO;

/**
 * The core class will hold central functions need to run the application.
 */
class Core
{
    /**
     * will hold the handle for a database connection
     * @var object
     */
    public $dbh;
    /**
     * reference for connection instance
     * @var object
     */
    private static $dbi;

    /**
     * load config data and connect to the database
     *
     * @return \Core
     */
    private function __construct()
    {
        // building data source name from config
        $dsn =  'mysql:host=' . Config::read('db.host') .
                ';dbname='    . Config::read('db.basename') .
                ';port='      . Config::read('db.port') .
                ';connect_timeout=15';
        // getting DB user from config
        $user = Config::read('db.user');
        // getting DB password from config
        $password = Config::read('db.password');
        $this->dbh = new PDO($dsn, $user, $password);
        $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    /**
     * get the reference to db connection
     * @return reference
     */
    public static function getInstance()
    {
        if (!isset(self::$dbi)) {
            $object = __CLASS__;
            self::$dbi = new $object;
        }
        return self::$dbi;
    }

    /**
     * takes an array or object and outputs it as xml.
     * @param object $data results from a query to be output as xml
     * @return void
     */
    public static function outputXml($data)
    {
        // set correct header to display xml
        header("Content-type: text/xml");
        $xml = '<?xml version="1.0" encoding="ISO-8859-1"?>';
        // create a root node
        $xml .= '<items>';
        // check that data is in proper format
        if (is_array($data)) {
            foreach ($data as $item) {
                // create a child node for each row
                $xml .= '<item>';
                foreach ($item as $key => $value) {
                    // echo a child node foreach key value pair.
                    $xml .= '<' . $key . '>' . htmlspecialchars($value) . '</' . $key . '>';
                }
                // close child node
                $xml .= '</item>';
            }
        }
        // close root node
        $xml .= '</items>';
        // xml all done...
        echo $xml;
    }
}
