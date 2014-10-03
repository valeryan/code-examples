<?php
/**
 * The core class will hold central functions need to run the application.
 *
 */
class Core
{
    public $dbh; // will hold the handle for a database connection
    private static $dbi; // reference for connection instance

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
        $this->dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }

    /**
     * get the reference to db connection
     *
     * @return reference
     */
    public function get_instance()
    {
        if (!isset(self::$dbi))
        {
            $object = __CLASS__;
            self::$dbi = new $object;
        }
        return self::$dbi;
    }

    /**
     * takes an array or object and outputs it as xml.
     *
     * @param object $data results from a query to be output as xml
     * @return void
     */
    public function output_xml($data)
    {
        // set correct header to display xml
        header("Content-type: text/xml");
        print('<?xml version="1.0" encoding="ISO-8859-1"?>');
        // create a root node
        echo '<items>';
            foreach ($data as $item)
            {
                // create a child node for each row
                echo '<item>';
                   foreach ($item as $key => $value)
                   {
                       // echo a child node foreach key value pair.
                       echo '<' . $key . '>' . htmlspecialchars($value) . '</' . $key . '>';
                   }
                echo '</item>';
            }
        echo '</items>';
        // xml all done...
    }
}
// end of file Core.php