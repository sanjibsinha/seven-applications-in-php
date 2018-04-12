<?php require_once '../header.php'; ?>
    <body>
        
       <!-- Image Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <h1 class="alert-primary">Object Oriented Programming</h1>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-11 order-lg-1 my-auto showcase-text">
            <a href="#">
                <h2>
                    Overloading
                </h2>
            </a>
                <h4 class="alert-primary">Output</h4>
            <p class="lead mb-0">
                
                <?php
                
                /*
                 * the requirement changes with your classes
                 * if you write a Friend class, you set everything accordingly.
                 * if it is Router class, it's no longer the same.
                 */
                
                
                class OverloadingClass {
                    
                    protected $uri;
                    protected $response;

                    function __construct() {
                        
                        echo 'This is overloading constructor.<br>';
                        
                    }
                    
                    function getResponse() {
                        
                        return "Here is the URI = " . $this->uri . " and here is the Response = " . $this->response . "<br>";
                    }
                    
                                        
                    function setResponse($response) {
                        
                        $this->response = $response;
                        
                    }
                    
                    //we are overloading the uri and response at the same time
                    function __call($name, $arguments) {
                        
                        if($name == "setURI"){
                            if(count($arguments) == 1){
                                $this->uri = $arguments[0];
                            }
                            if(count($arguments) == 2){
                                $this->uri = $arguments[0];
                                $this->response = $arguments[1];
                            }
                            }
                    }

                }
                
                echo 'CReating our new router...<br>';
                $router = new OverloadingClass();
                $router->setURI("/about");
                $router->setResponse("about.php");
                echo $router->getResponse();
                
                $router->setURI("/contact", "contact.php");
                echo $router->getResponse();
                
                ?>
                <br>
                
            </p>
          <h3 class="alert-primary">
                Code Snippet
            </h3>
             <pre>
                <code>
                    
                class OverloadingClass {
                    
                    public $uri;
                    protected $response;

                    function __construct() {
                        
                        echo 'This is overloading constructor.';
                        
                    }
                    
                    function getResponse() {
                        
                        return "Here is the URI = " . $this->uri . " and here is the Response = " . $this->response . "<br>";
                    }
                    
                                        
                    function setResponse($response) {
                        
                        $this->response = $response;
                        
                    }
                    
                    //we are overloading the uri and response at the same time
                    function __call($name, $arguments) {
                        
                        if($name == "setURI"){
                            if(count($arguments) == 1){
                                $this->uri = $arguments[0];
                            }
                            if(count($arguments) == 2){
                                $this->uri = $arguments[0];
                                $this->response = $arguments[1];
                            }
                            }
                    }

                }
                
                echo 'CReating our new router...';
                $router = new OverloadingClass();
                $router->setURI("/about");
                $router->setResponse("about.php");
                echo $router->getResponse();
                
                $router->setURI("/contact", "contact.php");
                echo $router->getResponse();
</code>
            </pre>
          </div>
        </div>
        
    </section>

    </body>
</html>
