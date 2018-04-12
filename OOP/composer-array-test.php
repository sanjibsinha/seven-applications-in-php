<?php require '../header.php'; ?>
    <body>
        
       <!-- Image Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <h1>Object Oriented Programming</h1>
        </div>
        
        <div class="row no-gutters">
            
            <div class="col-lg-11 order-lg-1 my-auto showcase-text">
            <a href="#">
                <h2>
                    Testing Array Object
                </h2>
            </a>
                <h4>Output</h4>
            <p class="lead mb-0">
                
                <?php

                    require '../vendor/autoload.php'; 

                    $ac = new Sanjib\ArrayCollection();
                    $ac->add_Key_And_Value("foo", "bar");
                    //$ac->add("bazz");

                    //var_dump($ac);

                    /* 
                     * the object holds an array or points to an array property which is public
                     * we need to get that array first
                     */

                    foreach ($ac as $array) {

                        foreach ($array as $key => $value) {
                            // we have used htmlspecialchars() function, because 
                            // inside value there are form tags, we need a clear picture
                            echo $key . " = " . htmlspecialchars($value) . "<br>";
                        }

                    }

                    echo '<br>';
                    echo json_encode($value);
                    echo '<br>';
                    echo count($ac);

                ?>
            </p>
          <h3>
                Code Snippet
            </h3>
             <pre>
                <code>
                    require 'vendor/autoload.php'; 

                    $ac = new Acme\ArrayCollection();

                    $ac->add_Key_And_Value("foo", "bar");
                    //$ac->add("bazz");

                    //var_dump($ac);

                    /* 
                     * the object holds an array or points to an array property which is public
                     * we need to get that array first
                     */

                    foreach ($ac as $array) {

                        foreach ($array as $key => $value) {
                            // we have used htmlspecialchars() function, because 
                            // inside value there are form tags, we need a clear picture
                            echo $key . " = " . htmlspecialchars($value);
                        }

                    }

                    
                    echo json_encode($value);
                    
                    echo count($ac);
</code>
            </pre>
          </div>
        </div>
        
    </section>

    </body>
</html>
