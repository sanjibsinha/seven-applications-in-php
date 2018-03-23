<?php require_once '../header.php'; ?>
    <body>
        
       <!-- Image Showcases -->
    <section class="showcase">
      <div class="container-fluid p-0">
          <h1 class="alert-danger">Practice Functions</h1>
        <div class="row no-gutters">
            
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <a href="#">
                <h2>
                    Creating a Flexible function
                </h2>
                <h4>
                    We're going to create a function that can
                    take variable number of arguments
                </h4>
                
            </a>
            <p class="lead mb-0">
                
                <?php
                
                function findTheAverage() {
                    
                    $parameters = func_get_args();
                    
                    $data = 0;
                    
                    for ($index = 0; $index < func_num_args(); $index++) {
                        
                        $data .= $parameters[$index];
                        
                    }
                    
//                    var_dump($data);
                    $res = str_split($data);
                    //var_dump($res);
                    function averager($array) {
                        
                        $TotalOfTheNumbers = 0;
                        $average = 0;
                        $NumberOfNUmbers = 0;

                        foreach ($array as $value) {

                            //the total of the numbers
                            $TotalOfTheNumbers = $TotalOfTheNumbers + $value;

                        }
                        //how many numbers ar there
                        $NumberOfNUmbers = count($array);
                        $finalCount = $NumberOfNUmbers -1;

                        //if there is no input

                        if(count($array) > 0){

                            //we'll get some verage value
                            $average = $TotalOfTheNumbers/$finalCount;
                            return $average;

                        }
                        else{

                            echo 'No input';

                        }
                        
                    }
                    
                    return averager($res);
                    
                    
                }
                
                echo findTheAverage(1, 2, 3, 4, 5);
                
                foreach ($array as $key => $value) {
    
}
                
                ?>
                
                
            </p>
          </div>

           <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <a href="#">
                <h2>
                    Returning simple values like integers, strings and 
                    we can also return arrays
                </h2>
            </a>
            <p class="lead mb-0">
                
                <?php
                
                    //we're going to return simple value like addition 
                    //of two numbers
                    function addition($param1, $param2) {

                        $total = 0;

                        $total = $param1 + $param2;

                        return $total;
                    }

                    echo addition(10, 20);
                    echo '<br>';

                    //returning arrays
                    
                    function creatingArray($number) {
                        
                        for ($index = 0; $index <= $number; $index++) {
                            
                            $array[] = $index;
                        }
                        
                        $newArray = array_shift($array);
                        
                        var_dump($array);
                        
                        
                    }
                    
                    creatingArray(4);
                ?>
                
            </p>
            
          </div>
        </div>
          <div class="col-lg-10 order-lg-1 my-auto showcase-text">
               <h2>
                    Code of Creating a Flexible function
                </h2>
              <pre>
<code>
    function findTheAverage() {
                    
                    $parameters = func_get_args();
                    
                    $data = 0;
                    
                    for ($index = 0; $index < func_num_args(); $index++) {
                        
                        $data .= $parameters[$index];
                        
                    }
                    
//                    var_dump($data);
                    $res = str_split($data);
                    //var_dump($res);
                    function averager($array) {
                        
                        $TotalOfTheNumbers = 0;
                        $average = 0;
                        $NumberOfNUmbers = 0;

                        foreach ($array as $value) {

                            //the total of the numbers
                            $TotalOfTheNumbers = $TotalOfTheNumbers + $value;

                        }
                        //how many numbers ar there
                        $NumberOfNUmbers = count($array);
                        $finalCount = $NumberOfNUmbers -1;

                        //if there is no input

                        if(count($array) > 0){

                            //we'll get some verage value
                            $average = $TotalOfTheNumbers/$finalCount;
                            return $average;

                        }
                        else{

                            echo 'No input';

                        }
                        
                    }
                    
                    return averager($res);
                    
                    
                }
                
                echo findTheAverage(1, 2, 3, 4, 5);
                
</code>
              </pre>
              
    <h2>
                    Code of Returning simple values like integers, strings and 
                    we can also return arrays
                </h2> 
              <pre>
                  <code>
                     //we're going to return simple value like addition 
                    //of two numbers
                    function addition($param1, $param2) {

                        $total = 0;

                        $total = $param1 + $param2;

                        return $total;
                    }

                    echo addition(10, 20);
                    echo '<br>';

                    //returning arrays
                    
                    function creatingArray($number) {
                        
                        for ($index = 0; $index <= $number; $index++) {
                            
                            $array[] = $index;
                        }
                        
                        $newArray = array_shift($array);
                        
                        var_dump($array);
                        
                        
                    }
                    
                    creatingArray(4);  
</code>
              </pre>
              
          </div>       
          
      </div>
    </section>

    </body>
</html>
