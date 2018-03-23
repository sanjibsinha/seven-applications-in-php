<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            
        </style>
        <!-- Bootstrap core CSS -->
        <link href="../css/css.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            
            <div class="row">
                <h1>
                    Passing Data Function
                </h1>
            </div>
            
<?php

/* 
 * passing data
 */


function display($greetings = "Hello", $name = "AnyName") {
    
    return $greetings . " " . $name;
    
}

echo display("Hello, how are you?", "Rahul");

echo '<hr>';





echo '<hr>';
/* 
 * passing array
 */

function ArrayDisplay($ArrayGreetings) {
    
    $ArrayGreetings = [
    
    "gretings" => "Hello, how ar you?",
    "name" => "Rahul"
    
];
    
var_dump($ArrayGreetings);

}

$ArrayGreetings1 = [
    
    "gretings" => "Hello?",
    "name" => "Sanjib"
    
];

ArrayDisplay($ArrayGreetings1);


$ages = [25, 36, 34];

AverageAge($ages);


function AverageAge($array) {
    
    $totalAges = 0;
    
    foreach ($array as $value) {
        
        $totalAges += $value;
        
    }
    
    if (count($array) > 0){
        
        echo "The avearge age of the employees is : " . $totalAges/ count($array);
        
    }
    else {
        echo 'No elements to array.';
    }
}
    
  ?>  


        </div>
       

    </body>
</html>
