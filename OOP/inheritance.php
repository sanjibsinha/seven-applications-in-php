<?php require_once '../header.php'; ?>
    <body>
        
       <!-- Image Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <h1 class="alert-dark">Object Oriented Programming</h1>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-11 order-lg-1 my-auto showcase-text">
            <a href="#">
                <h2>
                    Inheritance
                </h2>
            </a><h4>Output</h4>
            <p class="lead mb-0">
                
                <?php
                
                class Mobile {
                    
                    protected $name;

                    function __construct() {
                        
                        echo 'Constructing a superclass mobile object.<br>';
                        
                    }
                    
                    function setname($name) {
                        $this->name = $name;
                    }
                    
                    function getName() {
                        return $this->name;
                        
                    }
                }
                
                class MyMobile extends Mobile {
                    
                    protected $price;

                    function __construct() {
                        
//child constructor                        
//echo 'Constructing MyMobile object. <br>';
                        //parent constructor
                        parent::__construct();
                        
                    }
                    
                    function setPrice($price) {
                        $this->price = $price;
                    }
                    function getPrice() {
                        return $this->price;
                        
                    }

                }
                
                $myMobile = new MyMobile();
                $myMobile->setname("MyMobile");
                $myMobile->setPrice(10);
                echo "Price of {$myMobile->getName()} is : " . $myMobile->getPrice();
                
                ?>
                
            </p>
            <h3>
                Code Snippet
            </h3>
            <pre>
                <code>
                    
                class Mobile {
                    
                    protected $name;

                    function __construct() {
                        
                        echo 'Constructing a superclass mobile object.;
                        
                    }
                    
                    function setname($name) {
                        $this->name = $name;
                    }
                    
                    function getName() {
                        return $this->name;
                        
                    }
                }
                
                class MyMobile extends Mobile {
                    
                    protected $price;

                    function __construct() {
                        
//child constructor                        
//echo 'Constructing MyMobile object;
                        //parent constructor
                        parent::__construct();
                        
                    }
                    
                    function setPrice($price) {
                        $this->price = $price;
                    }
                    function getPrice() {
                        return $this->price;
                        
                    }

                }
                
                $myMobile = new MyMobile();
                $myMobile->setname("MyMobile");
                $myMobile->setPrice(10);
                echo "Price of {$myMobile->getName()} is : " . $myMobile->getPrice();
                    
</code>
            </pre>
            
            <a href="#">
                <h2>
                    More Inheritance
                </h2>
            </a><h4>Output</h4>
            <p class="lead mb-0">
                
                <?php
                
                class GrandParent {
                    
                    protected $grand;
                    protected $time;

                    function __construct($grand) {
                        
                        $this->grand = $grand;
                        echo "{$grand} constructor.";
                    }
                    
                    protected function setGrand($time) {
                        
                        $this->time = $time;
                        
                    }
                    
                    protected function getGrand() {
                        
                        return $this->time;
                        
                    }

                }
                
                class ParentClass extends GrandParent {
                    
                    protected $parent;

                    function __construct($parent) {
                        
                        $this->parent = $parent;
                        parent::__construct($parent);
                        
                    }
                    
                    function setParent_Grand($time) {
                        
                        parent::setGrand($time);
                        
                    }
                    
                    function getParent_Grand() {
                        
                        return parent::getGrand();
                        
                    }

                }
                
                class ClassChild extends ParentClass {
                    
                    protected $child;

                    function __construct($child) {
                        
                        $this->child = $child;
                        parent::__construct($child);
                        
                    }
                    
                    function setChild($time) {
                        
                        parent::setGrand($time);
                        
                    }
                    
                    function getChild() {
                        
                        return parent::getGrand();
                        
                    }

                }
                
                $parent = new ParentClass("I am inheriting from Grand");
                $parent->setParent_Grand("I belong to Grand period.");
                echo $parent->getParent_Grand();
                
                echo '<br>';
                
                $child = new ClassChild("I am inheriting from parent and parent inherits from Grand");
                $child->setParent_Grand("This is parent time.");
                echo $child->getParent_Grand();
                
                echo '<br>';
                
                $child->setChild("I am child and I also belong to the modern age.");
                echo $child->getChild();
                
                
                ?>
            </p>
            <h3>
                Code Snippet
            </h3>
             <pre>
                <code>
                    class GrandParent {
                    
                    protected $grand;
                    protected $time;

                    function __construct($grand) {
                        
                        $this->grand = $grand;
                        echo "{$grand} constructor.";
                    }
                    
                    protected function setGrand($time) {
                        
                        $this->time = $time;
                        
                    }
                    
                    protected function getGrand() {
                        
                        return $this->time;
                        
                    }

                }
                
                class ParentClass extends GrandParent {
                    
                    protected $parent;

                    function __construct($parent) {
                        
                        $this->parent = $parent;
                        parent::__construct($parent);
                        
                    }
                    
                    function setParent_Grand($time) {
                        
                        parent::setGrand($time);
                        
                    }
                    
                    function getParent_Grand() {
                        
                        return parent::getGrand();
                        
                    }

                }
                
                class ClassChild extends ParentClass {
                    
                    protected $child;

                    function __construct($child) {
                        
                        $this->child = $child;
                        parent::__construct($child);
                        
                    }
                    
                    function setChild($time) {
                        
                        parent::setGrand($time);
                        
                    }
                    
                    function getChild() {
                        
                        return parent::getGrand();
                        
                    }

                }
                
                $parent = new ParentClass("I am inheriting from Grand");
                $parent->setParent_Grand("I belong to Grand period.");
                echo $parent->getParent_Grand();
                
                
                
                $child = new ClassChild("I am inheriting from parent and parent inherits from Grand");
                $child->setParent_Grand("This is parent time.");
                echo $child->getParent_Grand();
                
                
                
                $child->setChild("I am child and I also belong to the modern age.");
                echo $child->getChild();
</code>
            </pre>
          </div>
        </div>
        
    </section>

    </body>
</html>
