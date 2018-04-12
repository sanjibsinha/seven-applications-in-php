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
                    Reflection Function
                </h2>
            </a>
                <h4>Output</h4>
            <p class="lead mb-0">
                
                <?php
                
//                class ExaminingCodeClass {
//                    
//                    static $counter;
//
//                    function __construct() {                        
//                                                
//                    }
                    
                    function setCounter() {
                        static $counter = 10;
                        $counter++;
                        return $counter;
                    }
                    
//                    function getCounter() {
//                        
//                        return self::$counter++;
//                        
//                    }
//
//                }
                
//                $examine = new ExaminingCodeClass();
//                $examine->setCounter(10);
//                echo $examine->getCounter();
//                echo $examine->getCounter();
//                echo $examine->getCounter();
echo setCounter();
echo '<br>';
echo setCounter();
echo '<br>';
                $examine = new ReflectionFunction('setCounter');
                echo $examine->getName();
                echo $examine->invoke();
                echo $examine->invoke();
                
                ?>
                
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
