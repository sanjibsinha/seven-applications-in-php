<?php require_once '../header.php'; ?>
    <body>
        <div class="container">
             <?php
        // put your code here
        echo "Hello 5 Apps.";
        ?>
        <a href="functions/index.php">Functions</a>
        <hr>
<!--        <a href="images/index.php">Images</a>-->
<a href="practice_functions.php">Practice Functions</a>
        <hr>
        
        <a href="practice_functions1.php">Practice Functions 1</a>
        <hr>
        
        <a href="global-data.php">Global Function</a>
        <hr>
        <a href="passing_arrays.php">Passing Arrays</a>
        <hr>
        <a href="user-defined.php">User Defined</a>
        <hr>
        
        
        
<?php

/* 
 * basic functions in php
 */

function GreetingsDisplay($message, $username) {
    
    return $message . " " . $username;
    
}

echo GreetingsDisplay("Hello", "Sanjib");




//user defined function
function NumStrArray() {
    
    $num1 = 10;

    $str1 = "string";

    $array1 = [0,1,2];
    
    echo $num1 . " " . $str1 . "<br>";
    
    var_dump($array1);
    
    echo '<hr>';
    
}

//user defined function
NumStrArray();


//default php function
$array2 = [
    
    "name"=>"Rahul",
    "age"=>25

    ];

var_dump($array2);

echo '<br>';

//default php function
array_pop($array2);

var_dump($array2);


echo '<hr>';


?>
<hr>
<a href="passing_data.php">Passing Data</a>

        </div>
       

    </body>
</html>