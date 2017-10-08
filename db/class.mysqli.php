<?php
namespace chipbug\php_demo;

include 'errors.php';
include 'credentials.php';
include 'class.dbconnect.php';

// Create connection
$conn = new mysqli('localhost', $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === true) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
