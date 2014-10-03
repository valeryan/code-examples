<?php
// load classes as they are called.
function __autoload($c){
    require_once $c.'.php';
}

// query
$sql = 'SELECT * FROM testtable';
// try to connect to db and get data
try{
    $core = Core::get_instance();
    $stmt = $core->dbh->prepare($sql);
    // do query and output xml
    if ($stmt->execute()) {
        // why an object? because arrows are cool.
        $o = $stmt->fetchAll(PDO::FETCH_OBJ);
        $core->output_xml($o);
    }
}
catch (PDOException $e){
    // we broke stuff...
    echo '<br />', 'PDO Exception Caught.', '<br />';
    echo 'Database Error:', '<br />';
    echo 'SQL Query: ', $sql, '<br />';
    echo 'Error: ' . $e->getMessage() . '<br />';
}

// End of file xmlfeed.php

