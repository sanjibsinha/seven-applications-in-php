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
                    Conditional
                </h2>
            </a>
            <p class="lead mb-0">
                
                <?php
                
                $condition = TRUE;
                
                callMeBefore();
                
                if ($condition){                    
                    function callMeLater() {
                        echo 'I exist only when the condition is true.';                        
                    }
                }
                
                function callMeBefore() {
                    echo 'You can call me any time.';                    
                }
                
                if (!$condition){
                    callMeLater();                    
                }
                else{
                    echo 'You cannot call certain functions.';
                }
                
                ?>
                
            </p>
            <h4>Code</h4>
            <pre>
                <code>
                
                
</code>
            </pre>
          
            <a href="#">
                <h2>
                    Function within Function
                </h2>
            </a>
            <p class="lead mb-0">
               <?php
               
               function outside() {
                   function inside() {
                       echo 'You cannot call me without calling the outside() function.';                       
                   }
               }
               //outside();
               inside();
               
               ?>
                
            </p>
            <h3>Code</h3>
            <pre>
                <code>
                
                  
</code>
            </pre>
            
          </div>
        </div>
        
    </section>

    </body>
</html>
