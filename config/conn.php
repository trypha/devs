<?php

// initializing variables
$dbHost = '127.0.0.1';
$dbName = 'devs';
$dbUser = 'root';
$dbPassword = '';

// connect to the database
try {
    $db = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);
    if ($db->connect_error) {
        die('Connection failed: ' . $db->connect_error);
    }
} catch(Exception $e) {
    echo $e->getMessage();
}
