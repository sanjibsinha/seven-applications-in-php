<?php require_once '../header.php'; ?>
    <body>
        
       <!-- Image Showcases -->
    <section class="showcase">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
            

           <div class="col-lg-11 order-lg-1 my-auto showcase-text">
            <a href="#">
                <h2>
                    Ternary
                </h2>
            </a>
            <p class="lead mb-0">
                
                <?php
                
                //if there are two possibilities
                $low = 10;
                $high = 30;
                $temp = 20;
                
                if ($temp < $low or $temp > $high){
                    echo 'Stay inside';
                }
                else{
                    echo 'Nice temperature out.';
                }
                
                echo '<br>';
                
                //we can also write it
                $ter = ($temp < $low || $temp > $high) ? "Stay in" : "Go out";
                echo $ter;
                
                ?>
                
            </p>
            <h2>Code Ternary</h2>
            <pre>
                <code>
                //if there are two possibilities
                $low = 10;
                $high = 30;
                $temp = 20;
                
                if ($temp < $low or $temp > $high){
                    echo 'Stay inside';
                }
                else{
                    echo 'Nice temperature out.';
                }
                
                //we can also write it
                $ter = ($temp < $low || $temp > $high) ? "Stay in" : "Go out";
                echo $ter;
</code>
            </pre>
          </div>
        </div>
        
    </section>

    </body>
</html>
