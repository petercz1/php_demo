<?php
namespace chipbug\php_demo;

// creates a database!

include '../common/class.dbConnect.php';

logger('testing');
logger($_GET['user']);
$name = $_GET['user'];
$pass = $_GET['pass'];

$db = new DbConnect($username, $password);
$sql = "CREATE DATABASE $name";
if ($db->conn->query($sql)) {
    logger('created db');
    echo 'created db';
} else {
    echo 'whoops';
    echo $db->conn->error;
    logger($db->conn->error);
}
$db->kill();
