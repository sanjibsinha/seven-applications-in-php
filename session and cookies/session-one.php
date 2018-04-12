<?php
// session-one.php
session_start();

echo 'Welcome to session page #1';

$_SESSION['writer'] = 'Ernest Hemingway';
$_SESSION['book']   = 'The Old man and the sea';
$_SESSION['time']     = time();

// Works if session cookie was accepted
echo '<br /><a href="session-two.php">Session Two Page</a>';

// Or maybe pass along the session id, if needed
echo '<br /><a href="session-two.php?' . SID . '">Session Two Page</a>';
