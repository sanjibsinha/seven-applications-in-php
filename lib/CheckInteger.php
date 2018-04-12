<?php
namespace Sanjib;
class CheckInteger {

    function __construct() {
        
    }
    
    function checkValidity() {
    
        if(strcmp($_REQUEST['age'], strval(intval($_REQUEST['age'])))){
        echo 'invalid';
        }
        else{
            echo $_REQUEST['age'];
        }
    
}

}

