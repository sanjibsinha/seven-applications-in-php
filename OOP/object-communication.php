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
                    How Objects Communicate with each other
                </h2>
            </a>
                <h4 class="alert-success">Output</h4>
            <p class="lead mb-0">
                <?php
                
                class ConnectorClass {
                    
                    protected $connector = [];

                    function __construct($array) {
                        
                        $this->connector = $array;
                        
                    }
                    
                    function callDataManager(DatabaseManager $databaseManager) {
                        
                        return $databaseManager->connectTODatabase($this->connector);
                        
                    }

                }
                
                class DatabaseManager {
                    
                    protected $databaseManager = [];
                    
                    function connectToDatabase($connector) {
                        
                        return $this->databaseManager = $connector;
                        
                    }

                }
                
                
                $databases = [
                    "mysql"=>"this is mysql",
                    "sqlpro"=>"this is sqlpro",
                    "mongodb"=>"this is mongodb"
                ];
                $connect = new ConnectorClass($databases['mysql']);
                //we could have done this
// $data = new DatabaseManager();
                // instead we have done this
                $a = $connect->callDataManager((new DatabaseManager()));
                
                var_dump($a);
                
                ?>
            </p>
          <h3 class="alert-success">
                Code Snippet
            </h3>
             <pre>
                <code>
                    class ConnectorClass {
                    
                    protected $connector = [];

                    function __construct($array) {
                        
                        $this->connector = $array;
                        
                    }
                    
                    function callDataManager(DatabaseManager $databaseManager) {
                        
                        return $databaseManager->connectTODatabase($this->connector);
                        
                    }

                }
                
                class DatabaseManager {
                    
                    protected $databaseManager = [];
                    
                    function connectToDatabase($connector) {
                        
                        return $this->databaseManager = $connector;
                        
                    }

                }
                
                
                $databases = [
                    "mysql"=>"this is mysql",
                    "sqlpro"=>"this is sqlpro",
                    "mongodb"=>"this is mongodb"
                ];
                $connect = new ConnectorClass($databases['mysql']);
                //we could have done this
// $data = new DatabaseManager();
                // instead we have done this
                $a = $connect->callDataManager((new DatabaseManager()));
                
                var_dump($a);
</code>
            </pre>
            
            <a href="#">
                <h2 class="alert-danger">
                    More Object Communication
                </h2>
            </a>
                <h4 class="alert-warning">Output</h4>
            <p class="lead mb-0">
               <?php
               
               class Company {
                   
                   protected $name;
                   protected $staff;

                   function __construct($name) {
                       $this->name = $name;
                   }
                   
                   public function getName() {
                       return $this->name;
                   }
                   
                   public function hire(Staff $staff) {
                       $this->staff = $staff;
                   }

               }
               
               class Staff {
                   
                   protected $name;

                   function __construct($name) {
                       $this->name = $name;
                   }
                   
                   public function add(Person $person) {
                       $this->name = $person;
                   }
               }
               
               class Person {
                   
                   protected $name;
                   protected $age;
                   protected $location;

                   function __construct($name, $age, $location) {
                       $this->name = $name;
                       $this->age = $age;
                       $this->location = $location;
                       
                   }
                   
                   public function getName() {
                       return $this->name;
                   }
                   
                   public function getAge() {
                       return $this->age;
                       
                   }
                   
                   public function getLocation() {
                       return $this->location;
                       
                   }

               }
               
               $persons = [
                   "name" => "Sanjib",
                   "age" => 52,
                   "location" => "Las Vegas"
               ];
               
               $person = new Person($persons['name'], $persons['age'], $persons['location']);
               $staff = new Staff($person);
               $company = new Company("ACME");
               
               $company->hire($staff);
               
               $staff->add($person);
               
               echo $company->getName() . " hires " . $person->getName() . 
                       " age = " . $person->getAge() . " location = " . $person->getLocation();
                
               ?>
            </p>
          <h3 class="alert-danger">
                Code Snippet
            </h3>
             <pre>
                <code>
                    class Company {
                   
                   protected $name;
                   protected $staff;

                   function __construct($name) {
                       $this->name = $name;
                   }
                   
                   public function getName() {
                       return $this->name;
                   }
                   
                   public function hire(Staff $staff) {
                       $this->staff = $staff;
                   }

               }
               
               class Staff {
                   
                   protected $name;

                   function __construct($name) {
                       $this->name = $name;
                   }
                   
                   public function add(Person $person) {
                       $this->name = $person;
                   }
               }
               
               class Person {
                   
                   protected $name;
                   protected $age;
                   protected $location;

                   function __construct($name, $age, $location) {
                       $this->name = $name;
                       $this->age = $age;
                       $this->location = $location;
                       
                   }
                   
                   public function getName() {
                       return $this->name;
                   }
                   
                   public function getAge() {
                       return $this->age;
                       
                   }
                   
                   public function getLocation() {
                       return $this->location;
                       
                   }

               }
               
               $persons = [
                   "name" => "Sanjib",
                   "age" => 52,
                   "location" => "Las Vegas"
               ];
               
               $person = new Person($persons['name'], $persons['age'], $persons['location']);
               $staff = new Staff($person);
               $company = new Company("ACME");
               
               $company->hire($staff);
               
               $staff->add($person);
               
               echo $company->getName() . " hires " . $person->getName() . 
                       " age = " . $person->getAge() . " location = " . $person->getLocation();
               
</code>
            </pre>
          </div>
        </div>
        
    </section>

    </body>
</html>
