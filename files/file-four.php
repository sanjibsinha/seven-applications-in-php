<?php
/* 
 * reading a file into an array
 * each line is a new value
 */
echo '<pre>';
$data = file("file.txt");
//var_dump($data);
foreach ($data as $key => $value) {
    echo $key . " = " . $value . "<br>";
}


