<?php require_once '../header.php'; ?>
    <body>
        
       <!-- Image Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <h1>For Loop</h1>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-11 order-lg-1 my-auto showcase-text">
            <a href="#">
                <h2>
                    First Example
                </h2>
            </a>
            <p class="lead mb-0">
                
               <?php
               
                    //$index = 1;
                    
                    for ($index = 0; $index < 3; $index++) {
                        
                        if ($index == 0){continue;}
                        echo "1/$index : " . 1/$index . "<br>";
                        //$index++;
                        
                    }
                    
               ?>
                
            </p>
          
            <a href="#">
                <h2>
                    Second Col HD
                </h2>
            </a>
            <p class="lead mb-0">
                
               
                
            </p>
          </div>
        </div>
        
    </section>

    </body>
</html>
