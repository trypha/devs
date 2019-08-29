<?php

function getUserByEmail($email,$dbConn){
    $stmt = $dbConn->prepare('select username from users where email=?');
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $stmt->bind_result($username);
    $stmt->store_result();
    $stmt->fetch();
    echo $username; //Output: name
    $stmt->close();
}