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
                    How to create a function
                </h2>
            </a>
            <p class="lead mb-0">
                
                <?php
                // suppose we have some numbers in array
                $numbers = [];
                
                echo averager($numbers);
                
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
                    
                    //if there is no input
                    
                    if(count($array) > 0){
                        
                        //we'll get some verage value
                        $average = $TotalOfTheNumbers/$NumberOfNUmbers;
                        return $average;
                        
                    }
                    else{
                        
                        echo 'No input';
                        
                    }  
                    
                }
                
                
                ?>
                
            </p>
          </div>

           <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <a href="#">
                <h2>
                    Pass a real thing to a function
                </h2>
            </a>
            <p class="lead mb-0">
                
                <?php
                
                $num = 4;
                
                //we want to square the value in a variable
                //will that change the original value?
                //the answer is NO
                function squarer($number) {
                    
                    $number *= $number;
                    return $number;
                    
                }
                //before the function call
                echo "The original value - " . $num;
                echo '<br>';
                squarer($num);
                echo '<br>';
                //after the function call
                echo "After the function call, the original value remains same - " . $num;
                echo '<br>';
                
                /*
                 * conclusion
                 * the function could not change the original value
                 * a copy of that value was passed and the original value remained unchanged
                 * But, if we pass the value by refereance, the original value is also changed
                 */
                
                function passByRef(&$param) {
                    
                    $param *= $param;
                    return $param;
                    
                }
                
                passByRef($num);
                //after the new function call
                echo "After passing data by reference, the original value takes the new value - " . $num;

                ?>
            </p>
            
          </div>
        </div>
          <div class="col-lg-10 order-lg-1 my-auto showcase-text">
              <h3>
              Code of How to create a function
          </h3>
          <pre>
              <code>
            // suppose we have some numbers in array
                $numbers = [];
                
                echo averager($numbers);
                
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
                    
                    //if there is no input
                    
                    if(count($array) > 0){
                        
                        //we'll get some verage value
                        $average = $TotalOfTheNumbers/$NumberOfNUmbers;
                        return $average;
                        
                    }
                    else{
                        
                        echo 'No input';
                        
                    }  
                    
                }
                      
</code>
          </pre>
          <h3>Code of passing a real thing in a function</h3>
            <pre>
                <code>
                $num = 4;
                
                //we want to square the value in a variable
                //will that change the original value?
                //the answer is NO
                function squarer($number) {
                    
                    $number *= $number;
                    return $number;
                    
                }
                //before the function call
                echo "The original value - " . $num;
                echo '<br>';
                squarer($num);
                echo '<br>';
                //after the function call
                echo "After the function call, the original value remains same - " . $num;
                echo '<br>';
                
                /*
                 * conclusion
                 * the function could not change the original value
                 * a copy of that value was passed and the original value remained unchanged
                 * But, if we pass the value by refereance, the original value is also changed
                 */
                
                function passByRef(&$param) {
                    
                    $param *= $param;
                    return $param;
                    
                }
                
                passByRef($num);
                //after the new function call
                echo "After passing data by reference, the original value takes the new value - " . $num;
                </code>
            </pre>
  
          </div>       
          
      </div>
    </section>

    </body>
</html>
