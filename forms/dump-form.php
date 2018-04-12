<?php

/* 
 * dumping form data all at once
 * 
 */


foreach ($_REQUEST as $key => $value) {
    
    echo $key . " = " . $value . "<br>";
    
    
}