<?php
/* 
 * reading a whole file at once
 * 
 */
$handle = file_get_contents("file.txt");
$full_text = str_replace("\n" , "<br>", $handle);
echo $full_text;


