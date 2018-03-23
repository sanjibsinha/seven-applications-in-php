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
                    Abstract Class
                </h2>
            </a>
                <h4 class="alert-warning">Output</h4>
            <p class="lead mb-0">
                
                <?php
                
                abstract class Router {
                    
                    protected $array = [];

                    function define($array) {
                        $this->array = $array;
                    }
                    
                    abstract function Redirect($uri);

                }
                
                class Route extends Router {

                    public function Redirect($uri) {
                        if(array_key_exists($uri, $this->array)){
                            return $this->array["{$uri}"];
                        }
                    }

                }
                
                $routes = [
                    "/test" => "http://localhost/dashboard/Five-Applications-in-php/test.php"
                ];
                
                
                
                $route = new Route();
                $route->define($routes);
                echo $route->Redirect("/test");
                
                ?>
            </p>
          <h3 class="alert-warning">
                Code Snippet
            </h3>
             <pre>
                <code>
                    abstract class Router {
                    
                    protected $array = [];

                    function define($array) {
                        $this->array = $array;
                    }
                    
                    abstract function Redirect($uri);

                }
                
                class Route extends Router {

                    public function Redirect($uri) {
                        if(array_key_exists($uri, $this->array)){
                            return $this->array["{$uri}"];
                        }
                    }

                }
                
                $routes = [
                    "/test" => "http://localhost/dashboard/Five-Applications-in-php/test.php"
                ];
                
                
                
                $route = new Route();
                $route->define($routes);
                echo $route->Redirect("/test");
</code>
            </pre>
          </div>
        </div>
        
    </section>

    </body>
</html>
