<?php

require '../header.php'; 

?>
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
                    Object Iteration
                </h2>
            </a>
                <h4 class="alert-dark">Output</h4>
            <p class="lead mb-0">
                
                <?php
                
                class IteratorClass implements Iterator {
                    
                    protected $array = [];

                    function __construct($array) {
                        if(is_array($array)){
                            $this->array = $array;
                        }
                    }
                    
                    public function current() {
                        return current($this->array);                        
                    }
                    
                    public function key() {
                        return key($this->array);                        
                    }
                    
                    public function next() {
                        return next($this->array);                        
                    }
                    
                    public function valid() {
                        return $this->current() !== FALSE;
                    }
                    
                    public function rewind() {
                        reset($this->array);                        
                    }
                    
                }
                
                $routes = [
                    
                    "/about" => "about.php",
                    "/contact" => "contact.php",
                    "/test" => "test.php"
                    
                ];
                
                $iterator = new IteratorClass($routes);
                
                foreach ($iterator as $key => $value) {
                    if($key){
                        echo $value . "<br>";
                    }
                    //echo $key . " = " . $value . "<br>";
                }
                
                ?>
            </p>
          <h3 class="alert-dark">
                Code Snippet
            </h3>
             <pre>
                <code>
                    class IteratorClass implements Iterator {
                    
                    protected $array = [];

                    function __construct($array) {
                        if(is_array($array)){
                            $this->array = $array;
                        }
                    }
                    
                    public function current() {
                        return current($this->array);                        
                    }
                    
                    public function key() {
                        return key($this->array);                        
                    }
                    
                    public function next() {
                        return next($this->array);                        
                    }
                    
                    public function valid() {
                        return $this->current() !== FALSE;
                    }
                    
                    public function rewind() {
                        reset($this->array);                        
                    }
                    
                }
                
                $routes = [
                    
                    "/about" => "about.php",
                    "/contact" => "contact.php",
                    "/test" => "test.php"
                    
                ];
                
                $iterator = new IteratorClass($routes);
                
                foreach ($iterator as $key => $value) {
                    if($key){
                        echo $value;
                    }
                    //echo $key . " = " . $value;
                }
                
</code>
            </pre>
          </div>
        </div>
        
    </section>

    </body>
</html>
