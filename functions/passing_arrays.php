<?php require_once '../header.php';

?>
    <body>
        
       <!-- Image Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <h1>Passing Arrays through Functions</h1>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-11 order-lg-1 my-auto showcase-text">
            <a href="#">
                <h2>
                    Passing Array
                </h2>
            </a>
            <p class="lead mb-0">
                
                <?php
                
                $name = "babu";
                $location = "nabagram";
                $hobby = "singing";
                
                $array1 = [
                    
                    'name', 'location', 'hobby'
                    
                ];
                
                $age = 10;
                
                $array2 = compact('age', $array1);
                
                print_r($array2);
               
                if(array_key_exists('name', $array2)){
                    
                    echo $array2['name'];
                        
                }
                
                echo '<hr>';
                
                /* 
                 * i want to create a function where i will pass key and array to test
                 * whether it exists, if it exists then it will render the value
                 * 
                 */
                
                $array = [
                    
                    "name"=>"bappa",
                    "location"=>"nabagram",
                    "age"=>10
                    
                ];
                
                
                
                class ClassName {
                    
                    public $key;
                    public $name;
                    public $array = [];
                    
                    function __construct($key, $array) {
                        
                        $this->key = $key;
                        $this->array = $array;
                        
                    }
                    
                    function functionName($name) {
                        
                        $this->name = $name;
                        
                        if(array_key_exists($this->name, $this->array)){
                            
                            return $this->array["{$this->name}"];
                            
                        }
                        else{
                            
                            return FALSE;
                            
                        }
                        
                    }
                    
                }
                
                $className = new ClassName('location', $array);
                echo $className->functionName('location');
                
                
                ?>
                
            </p>
          
            <a href="#">
                <h2>
                    Returning Array through Function
                </h2>
            </a>
            <p class="lead mb-0">
                
                <?php
                
                $router = [
                    
                    "/" => "index.php",
                    "/about" => "about.php"
                    
                ];
                
                class Router {
                    
                    public $array = [];
                    public $url;
                    public $destination;

                    function __construct($array) {
                        $this->array = $array;
                    }
                    
                    function redirect($url, $destination) {
                        $this->url = $url;
                        $this->destination = $destination;
                        
                        if(array_key_exists($this->url, $this->array)){
                            
                            return $this->array["{$this->url}"];
                            
                        }
                        else{
                            
                            return FALSE;
                            
                        }
                    }

                }
                
                $route = new Router($router);
                
                echo $route->redirect("/", "index.php");
                
                ?>
                  
            </p>
          </div>
        </div>
        
    </section>

    </body>
</html>
