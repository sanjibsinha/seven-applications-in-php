<?php
/* 
 * Opening, reading by character and closing a file
 */
$handle = fopen("file.txt", "r");

while ($char = fgetc($handle)) {    
    if($char == "\n"){
        $char = "<br>";
    }
    echo $char . "<br>";    
}
fclose($handle);