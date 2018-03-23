<?php require_once '../header.php'; ?>
    <body>
        
       <!-- Image Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <h1 class="alert-secondary">Object Oriented Programming</h1>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-11 order-lg-1 my-auto showcase-text">
            <a href="#">
                <h2>
                    Autoloading
                </h2>
            </a>
                <h4 class="alert-secondary">Output</h4>
            <p class="lead mb-0">
                
                <?php
                
                //the class name argument and the class you use should be matched
                function __autoload($class_name) {
                    require $class_name . '.php';                    
                }
                
                //class name and the file name should be matched
                //AutoloadTest.php
                $autoloadtest = new AutoloadTest("Hi I am autloading.");
                             
                
                ?>
            </p>
          <h3 class="alert-secondary">
                Code Snippet
            </h3>
             <pre>
                <code>
                  //the class name argument and the class you use should be matched
                function __autoload($class_name) {
                    require $class_name . '.php';                    
                }
                
                //class name and the file name should be matched
                //AutoloadTest.php
                $autoloadtest = new AutoloadTest("Hi I am autloading.");  
</code>
            </pre>
          </div>
        </div>
        
    </section>

    </body>
</html>
