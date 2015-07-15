<?php

require_once('Config.php');
require_once('Core.php');

use xmlfeed\Config;

// db config
Config::write('db.host', '192.168.10.10');
Config::write('db.port', '3306');
Config::write('db.basename', 'testdatabase');
Config::write('db.user', 'homestead');
Config::write('db.password', 'secret');
