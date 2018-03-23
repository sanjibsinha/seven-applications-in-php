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
                    Set and Get
                </h2>
            </a>
            <p class="lead mb-0">
                
                <?php
                
                // imagine a buying app
               // where we set a price ranging between two values
                // 2 to 10 dollars
                
                class BuyMe {
                    
                    public $product;
                    
                    public $price;

                    function __construct($product) {
                        
                        $this->product = $product;
                    }
                    
                    public function setPrice($price) {
                        
                            $this->price = $price;
                            $minimumPrice = 2;
                            if($this->price < $minimumPrice){throw new Exception;}
                            else{$this->price;}
                            
                    }
                    
                    public function getPrice() {
                        
                        return $this->price;
                        
                    }

                }
                
                $mobile = new BuyMe("Mobile");
                
                $mobile->setPrice(10);
                
                echo $mobile->getPrice();
                
                //$mobile->price = 1;
                
                //echo $mobile->price;
                
                
                ?>
                
            </p>
            <h3>Code</h3>
            <pre>
                <code>
                // imagine a buying app
               // where we set a price ranging between two values
                // 2 to 10 dollars
                
                class BuyMe {
                    loca
                    public $product;
                    
                    public $price;

                    function __construct($product) {
                        
                        $this->product = $product;
                    }
                    
                    public function setPrice($price) {
                        
                        if($this->price < 2 or $this->price > 10){
                            
                            throw new Exception;
                        }
                        else {
                            
                            $this->price = $price;
                            
                        }
                        
                    }
                    
                    public function getPrice() {
                        
                        return $this->price;
                        
                    }

                }
                
                $mobile = new BuyMe("Mobile");
                
                $mobile->setPrice(13);
                
                echo $mobile->getPrice();
                
                //$mobile->price = 1;
                
                //echo $mobile->price;    
</code>
            </pre>
          
            
          </div>
        </div>
        
    </section>

    </body>
</html>
