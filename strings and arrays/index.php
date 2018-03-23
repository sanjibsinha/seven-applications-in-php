<?php require_once '../header.php'; ?>
    <body>
        
       <!-- Image Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <h1 class="bg-warning">Strings and Arrays</h1>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-11 order-lg-1 my-auto showcase-text">
            <a href="#">
                <h2>
                    Array to String
                </h2>
            </a>
            <p class="lead mb-0">
                
               <?php
               
               $array = ["a", "b", "c"];
               
               $string = implode(", ", $array);
               
               echo $string;
               
               
               ?>
                
            </p>
            <h4>Code</h4>
            <pre>
                <code>
                    $array = ["a", "b", "c"];
               
               $string = implode(", ", $array);
               
               echo $string;
</code>
            </pre>
          
            <a href="#">
                <h2>
                    String to Array
                </h2>
            </a>
            <p class="lead mb-0">
                
                <?php
                
                    $string = "babu, mana, anju, bappa";

                    $array = explode(", ", $string);
                            
                    print_r($array);

                ?>  
            </p>
            <h4>Code</h4>
            <pre>
                <code>
                    
                    $string = "babu, mana, anju, bappa";

                    $array = explode(", ", $string);
                            
                    print_r($array);
                    
                </code>


            </pre>
            <a href="#">
                <h2>
                    Converting to and from String
                </h2>
            </a>
            <p class="lead mb-0">
                
                <?php
                
                    $float = 3.12345;
                    
                    echo (string) $float . "<br>";
                    echo strval($float) . "<br>";
                    $str = "12";
                    $variable = (int) $str;
                    if (is_int($variable)){ echo "Its integer. <br>";}
                    echo $variable . "<br>";
                    
                
                ?>  
            </p>
            <h4>Code</h4>
            <pre>
                <code>
                    
$float = 3.12345;
                    
echo (string) $float;
echo strval($float);
$str = "12";
$variable = (int) $str;
if (is_int($variable)){ echo "Its integer.;}
echo $variable;    
                    
                </code>


            </pre>
            
            <a href="#">
                <h2>
                    For Loop for Arrays
                </h2>
            </a>
            <p class="lead mb-0">
                
                <?php
                
                    
                $array =["baba", "ma", "chele", "meye"];
                    
                    for ($index = 0; $index < count($array); $index++) {
                        
                        
                        if ($index == 1){
                            echo $array[$index];
                        }
                        
                    }
                
                ?>  
            </p>
            <h4>Code</h4>
            <pre>
                <code>
                    $array =["baba", "ma", "chele", "meye"];
                    
                    for ($index = 0; $index < count($array); $index++) {
                        
                        
                        if ($index == 1){
                            echo $array[$index];
                        }
                        
                    }
                </code>
            </pre>
            
            <a href="#">
                <h2>
                    While Loop for Arrays and Array Operators
                </h2>
            </a>
            <p class="lead mb-0">
                
                <?php
                
                
                $arrayWithKey = [
                        
                        "name"=>"Mutudu",
                        "age"=>"14",
                        "location"=>"London",
                        "phone"=>123456,
                        "hobby"=>"gardening"
                        
                    ];
                $arrayWithAnotherKey = [
                        
                        "name"=>"Mutudu",
                        "age"=>"14",
                        "location"=>"London",
                        "phone"=>123456,
                        "hobby"=>"gardening"
                        
                    ];
                
                    while (list($key, $value) = each($arrayWithKey)) {
                        
                        echo " Key: " . $key . " Value: " . $value . "<br>";
                        
                    }
                    
                    //array operators are little bit different than normal operators
                    if($arrayWithKey === $arrayWithAnotherKey){
                        
                        echo 'These two arrays are identical.';
                        
                    }
                    else{
                        
                        echo 'They are not identical.';
                    }
                    
                    
                ?>  
            </p>
            <h4>Code</h4>
            <pre>
                <code>
                     $arrayWithKey = [
                        
                        "name"=>"Mutudu",
                        "age"=>"14",
                        "location"=>"London",
                        "phone"=>123456,
                        "hobby"=>"gardening"
                        
                    ];
                $arrayWithAnotherKey = [
                        
                        "name"=>"Mutudu",
                        "age"=>"14",
                        "location"=>"London",
                        "phone"=>123456,
                        "hobby"=>"gardening"
                        
                    ];
                
                    while (list($key, $value) = each($arrayWithKey)) {
                        
                        echo " Key: " . $key . " Value: " . $value;
                        
                    }
                    
                    //array operators are little bit different than normal operators
                    if($arrayWithKey === $arrayWithAnotherKey){
                        
                        echo 'These two arrays are identical.';
                        
                    }
                    else{
                        
                        echo 'They are not identical.';
                    }
                    
                </code>
            </pre>
            
                        <a href="#">
                <h2>
                    Multidimensional Arrays
                </h2>
            </a>
            <p class="lead mb-0">
                
                <?php
                
                $friends = [
                    
                    "Babu" => [
                        "age" => 12,
                        "hobby" => "singing"
                    ],
                    "Mana" => [
                        "age" => 9,
                        "hobby" => "dancing"
                    ],
                    "Babua" => [
                        "age" => 10,
                        "hobby" => "peeping"
                    ],
                    "Bappa" => [
                        "age" => 12,
                        "hobby" => "reading"
                    ],
                    "Anju" => [
                        "age" => 8,
                        "hobby" => "playing"
                    ],
                    
                ];
                
                
               // print_r($friends);
                
               foreach ($friends as $key => $value) {
                   
                   echo $key . "<br>";
                   
                   foreach ($value as $key => $element) {
                       
                       echo $key . "=" . $element . "<br>";
                       
                   }
                   
                   echo '<br>';
    
                }
                ?>  
            </p>
            <h4>Code</h4>
            <pre>
                <code>
                    $friends = [
                    
                    "Babu" => [
                        "age" => 12,
                        "hobby" => "singing"
                    ],
                    "Mana" => [
                        "age" => 9,
                        "hobby" => "dancing"
                    ],
                    "Babua" => [
                        "age" => 10,
                        "hobby" => "peeping"
                    ],
                    "Bappa" => [
                        "age" => 12,
                        "hobby" => "reading"
                    ],
                    "Anju" => [
                        "age" => 8,
                        "hobby" => "playing"
                    ],
                    
                ];
                
                
               // print_r($friends);
                
               foreach ($friends as $key => $value) {
                   
                   echo $key;
                   
                   foreach ($value as $key => $element) {
                       
                       echo $key . "=" . $element;
                       
                   }
                   
    
                }
                </code>
            </pre>
            
          </div>
        </div>
        
    </section>

    </body>
</html>
