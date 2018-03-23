<?php
require 'vendor/autoload.php'; 

$person = new Acme\Person();

require_once 'header.php'; ?>
    <body>
        
       <!-- Image Showcases -->
    <section class="showcase">
      <div class="container-fluid p-0">
          <h1 class="alert-danger">Practice Functions</h1>
        <div class="row no-gutters">
            
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <a href="#">
                <h2>
                    How to build an average function
                </h2>
            </a>
            <p class="lead mb-0">
                
                <?php
                
                             
                function averager($array) {
                    
                    $count = count($array);
                
                    $total = 0;

                    foreach ($array as $value) {

                        $total = $total + $value;
                        
                    }
                    
                    if($count > 0){
                        
                        $averageValue = $total/$count;
                    
                        return $averageValue;
                                                
                    }
                    else{
                        
                        echo 'No Input!';
                        
                    }
                    
                }
                
                $num = [12, 12];
                
                echo averager($num);
                
                
                
                ?>
                
            </p>
          </div>

           <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <a href="#">
                <h2>
                    How to Build a Simple Calculator
                </h2>
            </a>
            <p class="lead mb-0">
                
            <form method="GET" action="action.php">
           <div class="form-group">
    <label for="exampleText">Username</label>
    <input name="user" type="text" class="form-control" id="exampleInputType" aria-describedby="textHelp" placeholder="Enter Username">
    <small id="exampleInputTypeHelp" class="form-text text-muted">Please type your username.</small>
  </div>     
 
  <button type="submit" class="badge-warning">Submit</button>
</form>
                
            </p>
          </div>
        </div>
      </div>
    </section>

    </body>
</html>
