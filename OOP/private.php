<?php require_once '../header.php'; ?>
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
                    Private
                </h2>
            </a><h4>Output</h4>
            <p class="lead mb-0">
                
                <?php
                
                class Connection {
                    
                    private $connection;

                    function __construct() {
                        
                    }
                    
                    function setConnection($connection) {
                        
                        $this->connection = $connection;
                        
                    }
                    
                    function getConnection() {
                        
                        return "Here is my connection : " . $this->connection;
                        
                    }

                }
                
                $connect = new Connection();
                $connect->setConnection("MySQL");
                echo $connect->connection;
                echo $connect->getConnection();
                
               ?>
            </p>
            <h3>
                Code Snippet
            </h3>
            <pre>
                <code>
                    class Connection {
                    
                    private $connection;

                    function __construct() {
                        
                    }
                    
                    function setConnection($connection) {
                        
                        $this->connection = $connection;
                        
                    }
                    
                    function getConnection() {
                        
                        return "Here is my connection : " . $this->connection;
                        
                    }

                }
                
                $connect = new Connection();
                $connect->setConnection("MySQL");
                //echo $connect->connection;
                echo $connect->getConnection();
</code>
            </pre>
          
            <a href="#">
                <h2>
                    Constructor and Destructor
                </h2>
            </a>
            <h4>Output</h4>
            <p class="lead mb-0">
                
                <?php
                
                class Member {
                    
                    private $name;
                    private $address;

                    function __construct($name) {
                        
                        $this->name = $name;
                        echo "Hi, I am constructor...constructing $name";
                        echo '<br>';
                        
                    }
                    
                    function setNewAddress($address) {
                        
                        $this->address = $address;
                        
                    }
                    
                    function getNewAddress() {
                        
                        echo "Here is the new address of $this->name : " . $this->address;
                        
                    }
                    
                    function __destruct() {
                        
                        echo "Destructing $this->name and $this->address";
                        
                    }

                }
                
                $john = new Member("John Smith");
                $john->setNewAddress("Mexico");
                $john->getNewAddress();
                
               ?>
            </p>
            <h3>
                Code Snippet
            </h3>
            <pre>
                <code>
                    class Member {
                    
                    private $name;
                    private $address;

                    function __construct($name) {
                        
                        $this->name = $name;
                        echo "Hi, I am constructor...constructing $name";
                        
                        
                    }
                    
                    function setNewAddress($address) {
                        
                        $this->address = $address;
                        
                    }
                    
                    function getNewAddress() {
                        
                        echo "Here is the new address of $this->name : " . $this->address;
                        
                    }
                    
                    function __destruct() {
                        
                        echo "Destructing $this->name and $this->address";
                        
                    }

                }
                
                $john = new Member("John Smith");
                $john->setNewAddress("Mexico");
                $john->getNewAddress();
</code>
            </pre>
            
          </div>
        </div>
        
    </section>

    </body>
</html>
