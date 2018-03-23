<?php require_once '../header.php'; ?>
    <body>
        
       <!-- Image Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <h1 class="alert-info">Object Oriented Programming</h1>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-11 order-lg-1 my-auto showcase-text">
            <a href="#">
                <h2>
                    Overriding Methods
                </h2>
            </a>
                <h4 class="alert-info">Output</h4>
            <p class="lead mb-0">
                
                
                <?php
                
                class ClassParent {
                    
                    protected $parent;
                    protected $declare;

                    function __construct($parent) {
                        $this->parent = $parent;
                        echo "Hi, I am {$this->parent} <br>";
                    }
                    
                    function setName($declare) {
                        $this->declare = $declare;
                    }
                    
                    function getName() {
                        return $this->declare;
                    }

                }
                
                class Classchild extends ClassParent {
                    
                    protected $child;
                    protected $declare;

                    function __construct($child) {
                        $this->child = $child;
                        parent::__construct($child);
                        
                    }
                    
                    function setName($declare) {
                        $this->declare = strtoupper($declare);
                    }
                    
                    function getName() {
                        return $this->declare;
                        
                    }

                }
                
                $parent = new ClassParent("Parent");
                $parent->setName("My name is parent and using setNasme method. <br>");
                echo $parent->getName();
                
                $child = new Classchild("child but belongs to parent constructor");
                $child->setName("My name is Child and I am overriding parent setname methods.");
                echo $child->getName();
                
                
                ?>
            </p>
          <h3>
                Code Snippet
            </h3>
             <pre>
                <code>
                    class ClassParent {
                    
                    protected $parent;
                    protected $declare;

                    function __construct($parent) {
                        $this->parent = $parent;
                        echo "Hi, I am {$this->parent} ";
                    }
                    
                    function setName($declare) {
                        $this->declare = $declare;
                    }
                    
                    function getName() {
                        return $this->declare;
                    }

                }
                
                class Classchild extends ClassParent {
                    
                    protected $child;
                    protected $declare;

                    function __construct($child) {
                        $this->child = $child;
                        parent::__construct($child);
                        
                    }
                    
                    function setName($declare) {
                        $this->declare = strtoupper($declare);
                    }
                    
                    function getName() {
                        return $this->declare;
                        
                    }

                }
                
                $parent = new ClassParent("Parent");
                $parent->setName("My name is parent and using setNasme method. ");
                echo $parent->getName();
                
                $child = new Classchild("child but belongs to parent constructor");
                $child->setName("My name is Child and I am overriding parent setname methods.");
                echo $child->getName();
                 
</code>
            </pre>
          </div>
        </div>
        
    </section>

    </body>
</html>
