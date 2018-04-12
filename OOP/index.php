<?php
require '../vendor/autoload.php'; 

/* 
 * for composer and namespacing
 * very imp
 * name of the file and the name of the class should be same
 * you can keep class of same name in different namespace
 * as I have kept MachineClass() in Sanjib and Myapp
 * 
 * when you add new namespace in your composer file
 * run composer dump-autoload
 */

$machine1 = new Sanjib\MachineClass();
$machine2 = new Myapp\MachineClass();



$routes = [
                    
                    "/about" => "about.php",
                    "/contact" => "contact.php",
                    "http://localhost/dashboard/Five-Applications-in-php/test" => "test.php"
                    
                ];
                
                $iterator = new Acme\IteratorClass($routes);
                
                foreach ($iterator as $key => $value) {
                    if($key){
                        echo $value . "<br>";
                    }
                    //echo $key . " = " . $value . "<br>";
                }

?>

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
                    First Col HD
                </h2>
            </a>
                <h4>Output</h4>
            <p class="lead mb-0">
                
                <a href="classes.php">Classes</a>
                <br>
                <a href="getsetgo.php">Set and Get</a>
                <br>
                <a href="private.php">Private</a>
                <br>
                <a href="inheritance.php">Inheritance</a>
                <br>
                <a href="overriding.php">Overriding</a>
                <br>
                <a href="overloading.php">Overloading</a>
                <br>
                <a href="autoloading.php">Autoloading</a>
                <br>
                <a href="static.php">Static Methods</a>
                <br>
                <a href="abstract.php">Abstract Classes</a>
                <br>
                <a href="interface.php">Interface</a>
                <br>
                <a href="encapsulation.php">Hiding Information</a>
                <br>
                <a href="object-communication.php">Object Communication</a>
                <br>
                <a href="iterator.php">Object Iteration</a>
                <br>
                <a href="comparing-objects.php">Object Comparison</a>
                <br>
                <a href="class-constants.php">Class Constants</a>
                <br>
                <a href="final-keyword.php">Final Keyword</a>
                <br>
                <a href="composer-array-test.php">Testing Array Object</a>
                <br>
                <a href="cloning-objects.php">Cloning Object</a>
                <br>
                <a href="reflection-function.php">Examining Code</a>
                <br>
                <a href="reflection-class.php">Reflection Class</a>
                <br>
                <a href="more-on-reflection.php">More on Reflection Class</a>
                <br>
            </p>
          <h3>
                Code Snippet
            </h3>
             <pre>
                <code>
                    
</code>
            </pre>
          </div>
        </div>
        
    </section>

    </body>
</html>
