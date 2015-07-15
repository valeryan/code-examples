<?php

require_once('Bootstrap.php');

use xmlfeed\Core;

// query
$sql = 'SELECT * FROM testtable';
// try to connect to db and get data
try {
    $core = Core::getInstance();
    $stmt = $core->dbh->prepare($sql);
    // do query and output xml
    if ($stmt->execute()) {
        // get all data
        $obj = $stmt->fetchAll(PDO::FETCH_OBJ);
        $core->outputXml($obj);
    }

} catch (PDOException $e) {
    // we broke stuff...
    echo '<br />', 'PDO Exception Caught.', '<br />';
    echo 'Database Error:', '<br />';
    echo 'SQL Query: ', $sql, '<br />';
    echo 'Error: ' . $e->getMessage() . '<br />';
}
