<?php require_once '../header.php'; ?>
    <body>
        
       <!-- Image Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <h1>Accessing Global Data through functions...</h1>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-11 order-lg-1 my-auto showcase-text">
            <a href="#">
                <h2>
                    Local and Global
                </h2>
            </a>
            <p class="lead mb-0">
                
                <?php
                
                $value = 12;
                
                echo "We are calling value : " . $value . "<br>";
                
                echo "Calling function that could not take outside value. <br>";
                localFunc();
                echo "Calling function that can take outside value. <br>";
                globalFunc();
                
                function localFunc() {
                    
                    $value = 24;
                    
                    echo "This is inside value, defined differently : " . $value . "<br>";
                    
                }
                
                function globalFunc() {
                    
                    global $value;
                    
                    echo "We are accssing outside value through this function : " . $value . "<br>";
                
                }
                
                
                
                ?>
                
            </p>
            <h4>Code</h4>
            <pre>
                <code>
                    $value = 12;
                
                echo "We are calling value : " . $value;
                
                echo "Calling function that could not take outside value.;
                localFunc();
                echo "Calling function that can take outside value;
                globalFunc();
                
                function localFunc() {
                    
                    $value = 24;
                    
                    echo "This is inside value, defined differently : " . $value;
                    
                }
                
                function globalFunc() {
                    
                    global $value;
                    
                    echo "We are accssing outside value through this function : " . $value;
                
                }
                
</code>
            </pre>
          
            <a href="#">
                <h2>
                    How to retain value in Function
                </h2>
            </a>
            <p class="lead mb-0">
               
                <?php
                
                //normally function does not change value
                // the value inside them is reset every time you call it
                
                function NormalFunction() {
                    
                    $value = 0;
                    $value++;
                    return $value;
                    
                }
                
                // now if we call this function many times, each time the value is reset to
                // the old value
                
                echo NormalFunction();
                echo '<br>';
                echo NormalFunction();
                echo '<br>';
                echo NormalFunction();
                echo '<br>';
                echo NormalFunction();
                echo '<br>';
                
                // how can we solve this problem?
                // the first way
                echo 'Using Global';
                function GlobalFunction() {
                    
                    global $globalvalue;
                    $globalvalue++;
                    return $globalvalue;
                
                }
                
                echo '<br>';
                echo GlobalFunction();
                echo '<br>';
                echo '<br>';
                echo GlobalFunction();
                echo '<br>';
                echo '<br>';
                echo GlobalFunction();
                echo '<br>';
                echo '<br>';
                echo GlobalFunction();
                echo '<br>';
                
                
                // the second way
                
                echo 'Using Static';
                function StaticValueFunction() {
                    
                    static $staicValue = 0;
                    $staicValue++;
                    return $staicValue;
                    
                }
                
                echo '<br>';
                echo StaticValueFunction();
                echo '<br>';
                echo '<br>';
                echo StaticValueFunction();
                echo '<br>';
                echo '<br>';
                echo StaticValueFunction();
                echo '<br>';
                echo '<br>';
                echo StaticValueFunction();
                echo '<br>';
                
                
                
                
                ?>
            </p>
            <h3>Code</h3>
            <pre>
                <code>
                //normally function does not change value
                // the value inside them is reset every time you call it
                
                function NormalFunction() {
                    
                    $value = 0;
                    $value++;
                    return $value;
                    
                }
                
                // now if we call this function many times, each time the value is reset to
                // the old value
                
                echo NormalFunction();
               
                echo NormalFunction();
               
                echo NormalFunction();
               
                echo NormalFunction();
               
                
                // how can we solve this problem?
                // the first way
                
                echo 'Using Global';
                function GlobalFunction() {
                    
                    global $globalvalue;
                    $globalvalue++;
                    return $globalvalue;
                
                }
                
               
                echo GlobalFunction();
               
               
                echo GlobalFunction();
               
               
                echo GlobalFunction();
               
               
                echo GlobalFunction();
               
                
                
                // the second way
                
                echo 'Using Static';
                
                function StaticValueFunction() {
                    
                    static $staicValue = 0;
                    $staicValue++;
                    return $staicValue;
                    
                }
                
               
                echo StaticValueFunction();
               
               
                echo StaticValueFunction();
               
               
                echo StaticValueFunction();
               
               
                echo StaticValueFunction();
                  
</code>
            </pre>
            
          </div>
        </div>
        
    </section>

    </body>
</html>
