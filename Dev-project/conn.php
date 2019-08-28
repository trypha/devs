<?php

// initializing variables
$username = "";
$email    = "";
$url = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'register');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
?>