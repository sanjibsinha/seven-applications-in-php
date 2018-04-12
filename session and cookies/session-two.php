<?php
// session-two.php
session_start();

echo 'Welcome to session page #2<br />';

echo $_SESSION['writer'];
echo '<br>';
echo $_SESSION['book'];  
echo '<br>';
echo date('Y m d H:i:s', $_SESSION['time']);
echo '<br>';
var_dump(SID);

echo '<br /><a href="session-one.php">Session page 1</a>';