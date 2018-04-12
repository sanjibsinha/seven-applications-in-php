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
                    How to Clone Objects
                </h2>
            </a>
                <h4>Output</h4>
            <p class="lead mb-0">
                
                <?php
                
                class Cloning{
                    
                    public $obj = [];
                    
                    function display() {
                        return $this->obj;                        
                    }
                
                }
                
                $object1 = new Cloning();
                $object1->display();                
                
                $object = clone $object1;
                
                /* 
                 * $object1 has some internal properties
                 * the properties of the cloned object
                 * will also point to the same subobjects                 * 
                 */
                var_dump($object);
                echo '<br>';
                
                class ParentClass {
                    
                    public $child1;
                    public $child2;

                    function __construct() {
                        $this->child1 = new ChildClass();
                        $this->child2 = new ChildClass();
                    }
                    
                    function __clone() {
                        $this->child1 = clone $this->child1;                        
                    }

                }
                
                class ChildClass {
                    
                    public $child1 = "this is child 1";
                    public $child2 = "this is child 2";

                    function __construct() {
                        return "Child 1 : " . $this->child1 . " " . "Child 2 : " . $this->child2;                        
                    }
                    
                    function __clone() {
                        $this->child1 = "A newly cloned child in place of child 1.";
                    }

                }
                
                $parentObject = new ParentClass();
                $clonedChild = clone $parentObject;
                
                echo '$parentObject = <br>';
                print_r($parentObject);
                echo '<br>';
                echo '$clonedObject = <br>';
                print_r($clonedChild);
                
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
