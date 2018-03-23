<?php require_once '../header.php'; ?>
    <body>
        
       <!-- Image Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <h1 class="alert-warning">Object Oriented Programming</h1>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-11 order-lg-1 my-auto showcase-text">
            <a href="#">
                <h2>
                    Interface
                </h2>
            </a>
                <h4 class="alert-warning">Output</h4>
            <p class="lead mb-0">
                <?php
                
                interface InterfaceTask {
                    function Task();
                }
                
                class ClassTask implements InterfaceTask {

                    function __construct() {
                        
                    }
                    
                    function Task() {
                        
                        echo 'This is task implementing interface.';
                                                
                    }
                    

                }
                
                $task = new ClassTask();
                $task->Task();
                
                
                ?>
            </p>
          <h3 class="alert-warning">
                Code Snippet
            </h3>
             <pre>
                <code>
                    interface InterfaceTask {
                    function Task();
                }
                
                class ClassTask implements InterfaceTask {

                    function __construct() {
                        
                    }
                    
                    function Task() {
                        
                        echo 'This is task implementing interface.';
                                                
                    }
                    

                }
                
                $task = new ClassTask();
                $task->Task();
</code>
            </pre>
          </div>
        </div>
        
    </section>

    </body>
</html>
