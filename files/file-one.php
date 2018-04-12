<?php

/* 
 * Opening, reading and closing a file
 */
$handle = fopen("file.txt", "r");
while (!feof($handle)) {
    $text = fgets($handle);
    echo $text . "<br>";    
}
fclose($handle);
