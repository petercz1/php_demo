<?php
namespace chipbug\php_demo;

// creates a database!

include '../common/class.dbConnect.php';

$name = $_GET['db'];
logger("creating database $name");

$db = new DbConnect($admin_name, $admin_pass);
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
