<?php require '../header.php'; ?>
    <body>
        
       <!-- Image Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <h1 class="alert-danger">Object Oriented Programming</h1>
        </div>
        
        <div class="row no-gutters">
            
            <div class="col-lg-11 order-lg-1 my-auto showcase-text">
            <a href="#">
                <h2>
                    Final Keyword
                </h2>
            </a>
                <h4 class="alert-danger">Output</h4>
            <p class="lead mb-0">
                
                <?php
                
                class ConfessionClass {
                    
                    protected $confession;

                    function __construct() {
                        
                    }
                    
                    public function setConfession($confession) {
                        $this->confession = $confession;
                    }
                    
                    public function getConfession() {
                        return "Here is my confession " . $this->confession;                        
                    }
                }
                
                class MoreConfessionClass extends ConfessionClass {
                    
                    protected $confession;

                    function __construct() {
                        
                    }
                    
                    public function setConfession($confession) {
                        $this->confession = $confession;
                    }
                    
                    public function getConfession() {
                        return "Here I am overiding previous confession " . strtoupper($this->confession);                        
                    }
                }
                
                // this is typical inheritance
                $confession = new ConfessionClass();
                $confession->setConfession("I don't like killing animals.");
                echo $confession->getConfession();
                echo '<br>';
                $moreConfession = new MoreConfessionClass();
                $moreConfession->setConfession("I hate killing animals.");
                echo $moreConfession->getConfession();
                
                /* 
                 * you ould have made the class final as - final class ClassName(){}
                 * 
                 * now you dont' like overriding the parent confession by the child
                 * use the final keyword before setConfession() class
                 * it will give you an error like this:
                 * 
                 * Cannot override final method AnotherConfessionClass::setConfession() 
                 * in C:\xampp\htdocs\dashboard\Five-Applications-in-php\OOP\final-keyword.php on line 103                 
                */
                class AnotherConfessionClass {
                    
                    protected $confession;

                    function __construct() {
                        
                    }
                    
                    final function setConfession($confession) {
                        $this->confession = $confession;
                    }
                    
                    public function getConfession() {
                        return "Here is my confession " . $this->confession;                        
                    }
                }
                
                class AnotherChildConfessionClass extends AnotherConfessionClass {
                    
                    protected $confession;

                    function __construct() {
                        
                    }
                    
                    public function setConfession($confession) {
                        $this->confession = $confession;
                    }
                    
                    public function getConfession() {
                        return "Here I am overiding previous confession " . strtoupper($this->confession);                        
                    }
                }
                
               
                ?>
                
            </p>
          <h3 class="alert-danger">
                Code Snippet
            </h3>
             <pre>
                <code>
                    class ConfessionClass {
                    
                    protected $confession;

                    function __construct() {
                        
                    }
                    
                    public function setConfession($confession) {
                        $this->confession = $confession;
                    }
                    
                    public function getConfession() {
                        return "Here is my confession " . $this->confession;                        
                    }
                }
                
                class MoreConfessionClass extends ConfessionClass {
                    
                    protected $confession;

                    function __construct() {
                        
                    }
                    
                    public function setConfession($confession) {
                        $this->confession = $confession;
                    }
                    
                    public function getConfession() {
                        return "Here I am overiding previous confession " . strtoupper($this->confession);                        
                    }
                }
                
                // this is typical inheritance
                $confession = new ConfessionClass();
                $confession->setConfession("I don't like killinf animals.");
                echo $confession->getConfession();
                
                $moreConfession = new MoreConfessionClass();
                $moreConfession->setConfession("I hete killing animals.");
                echo $moreConfession->getConfession();
                
                /* now you dont' like overriding the parent confession by the child
                 * use the final keyword before setConfession() class
                 * it will give you an error like this:
                 * 
                 * Cannot override final method AnotherConfessionClass::setConfession() 
                 * in C:\xampp\htdocs\dashboard\Five-Applications-in-php\OOP\final-keyword.php on line 103                 
                */
                class AnotherConfessionClass {
                    
                    protected $confession;

                    function __construct() {
                        
                    }
                    
                    final function setConfession($confession) {
                        $this->confession = $confession;
                    }
                    
                    public function getConfession() {
                        return "Here is my confession " . $this->confession;                        
                    }
                }
                
                class AnotherChildConfessionClass extends AnotherConfessionClass {
                    
                    protected $confession;

                    function __construct() {
                        
                    }
                    
                    public function setConfession($confession) {
                        $this->confession = $confession;
                    }
                    
                    public function getConfession() {
                        return "Here I am overiding previous confession " . strtoupper($this->confession);                        
                    }
                }
</code>
            </pre>
          </div>
        </div>
        
    </section>

    </body>
</html>
