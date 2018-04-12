<?php require '../header.php'; ?>
    <body>
        
       <!-- Image Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <h1 class="alert-heading">Object Oriented Programming</h1>
        </div>
        
        <div class="row no-gutters">
            
            <div class="col-lg-11 order-lg-1 my-auto showcase-text">
            <a href="#">
                <h2>
                    Class Constants
                </h2>
            </a>
                <h4 class="alert-heading">Output</h4>
            <p class="lead mb-0">
                
                <?php
                
                /*
                 * class constants are used by classes
                 */
                
                class ConstantClass {
                    
                    const interest = 0.5;

                    function __construct() {
                        
                    }
                    
                    public static function displayConst() {
                        echo "Displaying constant ineterest from inside : " . self::interest;
                    }
                }
                
                $const = new ConstantClass();
                $const->displayConst();
                echo '<br>';
                ConstantClass::displayConst();
                echo '<br>';
                echo "Displaying constant interest from outside : " . ConstantClass::interest;
                
                ?>
                
            </p>
          <h3 class="alert-heading">
                Code Snippet
            </h3>
             <pre>
                <code>
                    /*
                 * class constants are used by classes, not by constants
                 */
                
                class ConstantClass {
                    
                    const interest = 0.5;

                    function __construct() {
                        
                    }
                    
                    public static function displayConst() {
                        echo "Displaying constant ineterest from inside : " . self::interest;
                    }
                }
                
                $const = new ConstantClass();
                $const->displayConst();
                
                ConstantClass::displayConst();
                
                echo "Displaying constant interest from outside : " . ConstantClass::interest;
</code>
            </pre>
          </div>
        </div>
        
    </section>

    </body>
</html>
