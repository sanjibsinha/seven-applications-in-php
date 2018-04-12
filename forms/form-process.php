<?php

/* 
 * This is form processing page
 */

if(is_string($_REQUEST['username'])){
    $name = $_REQUEST['username'];
    echo htmlspecialchars($name) . "<br>";
}

if(is_string($_REQUEST['email'])){
    $email = $_REQUEST['email'];
    echo htmlspecialchars($email) . "<br>";
}

if(is_string($_REQUEST['password'])){
    $password = $_REQUEST['password'];
    echo htmlspecialchars($password) . "<br>";
}

if(is_string($_REQUEST['data'])){
    $description = $_REQUEST['data'];
    echo nl2br(htmlspecialchars($description)) . "<br>";
}





