<?php

/* 
 * to get the file data
 */

/*
$handle = fopen($_FILES['userfile'] ['tmp_name'], "r");

while (!feof($handle)) {
    $file = fgets($handle);
    echo $file . "<br>";
}
fclose($handle);
*/

$handle = file_get_contents($_FILES['userfile'] ['tmp_name'], "r");

$full_text = str_replace("\n", "<br>", $handle);

echo $full_text;