<?php require_once '../header.php'; ?>
    <body>
        
       <!-- Image Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <h1 class="alert-success">Object Oriented Programming</h1>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-11 order-lg-1 my-auto showcase-text">
            <a href="#">
                <h2>
                    Creating and Passing data to Static methods 
                </h2>
            </a>
                <h4 class="alert-success">Output</h4>
            <p class="lead mb-0">
                
                <?php
                
                class StaticClass {

                    static $data;
                    
                    public static function staticFunction($param) {
                        
                        //in static methods $this-> is replaced by self::
                        self::$data = $param;
                        self::$data++;
                        return self::$data;
                        
                    }
                }
                
                echo StaticClass::staticFunction(2);
                
                ?>
                
            </p>
          <h3 class="alert-success">
                Code Snippet
            </h3>
             <pre>
                <code>
                    class StaticClass {

                    static $data;
                    
                    public static function staticFunction($param) {
                        //in static methods $this-> is replaced by self::
                        self::$data = $param;
                        self::$data++;
                        return self::$data;
                        
                        }
                    }
                
                echo StaticClass::staticFunction(2);
</code>
            </pre>
            
            <a href="#">
                <h2>
                    Static Members and Inheritance
                </h2>
            </a>
                <h4 class="alert-success">Output</h4>
            <p class="lead mb-0">
                
                <?php
                
                class ParentStaticClass {
                    
                    static $data;
                    
                    public static function setName($param) {
                        self::$data = $param;                        
                    }
                    
                    public static function getName() {
                        return self::$data;                        
                    }
                }
                
                class ChildStaticClass extends ParentStaticClass {
                    
                    public static function getChildMethod() {
                        ParentStaticClass::setName("Hi I am child, inheriting from parent");
                        return ParentStaticClass::getName();
                    }

                }
                
                echo ChildStaticClass::getChildMethod();
                
                
                ?>
                
            </p>
          <h3 class="alert-success">
                Code Snippet
            </h3>
             <pre>
                <code>
                  class ParentStaticClass {
                    
                    static $data;
                    
                    public static function setName($param) {
                        self::$data = $param;                        
                    }
                    
                    public static function getName() {
                        return self::$data;                        
                    }
                }
                
                class ChildStaticClass extends ParentStaticClass {
                    
                    public static function getChildMethod() {
                        ParentStaticClass::setName("Hi I am child, inheriting from parent");
                        return ParentStaticClass::getName();
                    }

                }
                
                echo ChildStaticClass::getChildMethod();  
</code>
            </pre>
            
            
          </div>
        </div>
        
    </section>

    </body>
</html>
