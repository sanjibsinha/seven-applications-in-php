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
                    Why Encapsulation is important
                </h2>
            </a>
                <h4 class="alert-success">Output</h4>
            <p class="lead mb-0">
                
                <?php
                
                class CarClass {
                    
                    protected $steering;
                    
                    function setSteer($steering) {
                        $this->steering = $steering;                        
                    }
                    
                    function getSteer() {
                        echo "We turn " . $this->steering;                        
                    }
                    
                    private function steeringService() {
                        
                        return 'Detach the steering and service it.';
                        
                    }
                    
                    public function callMechanic() {
                        
                        return "Call the mechanic and tell him to " . $this->steeringService();
                        
                    }

                }
                
                $car = new CarClass();
                $car->setSteer("left");
                $car->getSteer();
                echo '<br>';
                echo $car->callMechanic();
                
                // if some laymen can access the steeringService method
                // that is dangerous
                //(new CarClass())->steeringService();
                
                // so we need to hide this information 
                // by encapsulating this method, either we can make it private or protected
                ?>
                
            </p>
          <h3 class="alert-success">
                Code Snippet
            </h3>
             <pre>
                <code>
                    class CarClass {
                    
                    protected $steering;
                    
                    function setSteer($steering) {
                        $this->steering = $steering;                        
                    }
                    
                    function getSteer() {
                        echo "We turn " . $this->steering;                        
                    }
                    
                    private function steeringService() {
                        
                        return 'Detach the steering and service it.';
                        
                    }
                    
                    public function callMechanic() {
                        
                        return "Call the mechanic and tell him to " . $this->steeringService();
                        
                    }

                }
                
                $car = new CarClass();
                $car->setSteer("left");
                $car->getSteer();
                
                echo $car->callMechanic();
                
                // if some laymen can access the steeringService method
                // that is dangerous
                //(new CarClass())->steeringService();
                
                // so we need to hide this information 
                // by encapsulating this method, either we can make it private or protected
</code>
            </pre>
          </div>
        </div>
        
    </section>

    </body>
</html>
