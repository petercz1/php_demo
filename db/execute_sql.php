<?php
namespace chipbug\php_demo;

include 'errors.php';
include 'credentials.php';
include 'class.dbconnect.php';

logger('testing');
logger($_GET['sql']);

$db = new DbConnect($username, $password);
$conn = $db->connect();
