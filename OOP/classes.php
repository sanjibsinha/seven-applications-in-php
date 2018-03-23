<?php require_once '../header.php'; ?>
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
                    Classes
                </h2>
            </a>
            <p class="lead mb-0">
                
                <?php
                
                // let us create a house building App
                // we need to create a type 
                // and we want to create different types of house objects
                
                class House {
                    
                    // each house has doors
                    // they could be different colors
                    public $door;

                    function __construct($door) {
                        
                        $this->door = $door;
                    }

                }
                
                $house1 = new House("Red");
                
                echo "We have just created a house with " . $house1->door . " door. <br>";
                
                $house2 = new House("Blue");
                
                echo "We have just created a house with " . $house2->door . " door.<br>";
                
                class MyApp {
                    
                    // each house has doors
                    // they could be different colors
                    public $lower_pressure;
                    public $upper_pressure;                    
                    public $diet = "normal";

                    function __construct($lower_pressure, $upper_pressure) {
                        
                        $this->lower_pressure = $lower_pressure;
                        $this->upper_pressure = $upper_pressure;
                        $this->yourDiet();
                    }
                    
                    function yourDiet() {
                        
                        //you can check several options here
                        if($this->lower_pressure < 70 and $this->upper_pressure >= 130){
                            return "You have to take special diet.";
                        }
                        elseif ($this->lower_pressure < 70 or $this->upper_pressure >= 130) {
                            return "You have to restrict your salt-intake.";
                        }
                        else{
                            return "Your diet is {$this->diet}.";
                        }
                        
                    }

                }
                
                $yourApp = new MyApp(45, 120);
                echo $yourApp->yourDiet();
                
                ?>
                
            </p>
            <h4>Procedurally it becomes difficult to handle</h4>
            <p class="lead mb-0">
                
                <?php
                
                // let us assume we want to create the same functionality 
                // procedurally
                //$door = "RED";
                
                function House1($door) {
                    
                    //global $door;
                    $door = "Red";
                     echo "We have just created a house with " . $door . " door. <br>";
                     
                }
                function House2($door) {
                    
                    //global $door;
                    $door = "Blue";
                     echo "We have just created a house with " . $door . " door. <br>";
                     
                }
                
                House1("Red");
                House2("Blue");
                
                // for different houses we need to create diferent functions
                // no reusability
                // no separation of codes
                
                
                ?>
                
            </p>
            <h3>Code</h3>
            <pre>
                <code style="color: blue">
                    // let us create a house building App
                // we need to create a type 
                // and we want to create different types of house objects
                
                class House {
                    
                    // each house has doors
                    // they could be different colors
                    public $door;

                    function __construct($door) {
                        
                        $this->door = $door;
                    }

                }
                
                $house1 = new House("Red");
                
                echo "We have just created a house with " . $house1->door . " door. ";
                
                $house2 = new House("Blue");
                
                echo "We have just created a house with " . $house2->door . " door.";
                
                // let us assume we want to create the same functionality 
                // procedurally
                //$door = "RED";
                
                function House1($door) {
                    
                    //global $door;
                    $door = "Red";
                     echo "We have just created a house with " . $door . " door.";
                     
                }
                function House2($door) {
                    
                    //global $door;
                    $door = "Blue";
                     echo "We have just created a house with " . $door . " door.";
                     
                }
                
                House1("Red");
                House2("Blue");
                
                // for different houses we need to create diferent functions
                // no reusability
                // no separation of codes
</code>
            </pre>
            
          </div>
        </div>
        
    </section>

    </body>
</html>
