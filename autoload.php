<?php 

// Create connection
$db = mysqli_connect('localhost', 'root', '', 'register');

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 

 $query = mysqli_query($db, "SELECT email FROM users WHERE id='1' LIMIT 1");
$result = mysqli_fetch_assoc($query);
echo $result['email'];

?>