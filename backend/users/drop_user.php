<?php
namespace chipbug\php_demo;

// drops a database - dangerous!

include '../common/class.dbConnect.php';


logger('testing');
logger($_GET['db']);
$name = $_GET['db'];

$db = new DbConnect($username, $password);
$sql = "DROP DATABASE $name";
if ($db->conn->query($sql)) {
    logger('dropped db');
    echo 'dropped db';
} else {
    logger($db->conn->error);
    echo $db->conn->error;
}
$db->kill();