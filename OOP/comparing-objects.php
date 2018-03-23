<?php require '../header.php'; ?>
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
                    Object Comparison
                </h2>
            </a>
                <h4 class="alert-warning">Output</h4>
            <p class="lead mb-0">
                <?php
                
                class FirstClass {
                    
                    protected $item;

                    function __construct($ietm) {
                        $this->item = $ietm;
                    }

                }
                
                class SecondClass {
                    
                    protected $item;

                    function __construct($ietm) {
                        $this->item = $ietm;
                    }

                }
                
                $first = new FirstClass("a");
                $second = new SecondClass("a");
                $firstCopy = $first;
                $firstSimilar = new FirstClass("a");
                
                if($first == $second){
                    echo 'True';
                } else {
                    echo 'false';
                }
                echo '<br>';
                echo '$first and $second is not equal.';
                echo '<br>';
                if($first == $firstCopy){
                    echo 'True';
                } else {
                    echo 'false';
                }
                echo '<br>';
                echo '$first and $firstCopy is equal.';
                echo '<br>';
                if($first == $firstSimilar){
                    echo 'True';
                } else {
                    echo 'false';
                }
                echo '<br>';
                echo '$first and $firstSimilar is equal.';
                echo '<br>';
                if($first === $second){
                    echo 'True';
                } else {
                    echo 'false';
                }
                echo '<br>';
                echo '$first and $second is not identical.';
                echo '<br>';
                if($first === $firstCopy){
                    echo 'True';
                } else {
                    echo 'false';
                }
                echo '<br>';
                echo '$first and $firstCopy is identical.';
                echo '<br>';
                if($first === $firstSimilar){
                    echo 'True';
                } else {
                    echo 'false';
                }
                echo '<br>';
                echo '$first and $firstSimilar is not identical.';
                echo '<br>';
                
                ?>
            </p>
          <h3 class="alert-warning">
                Code Snippet
            </h3>
             <pre>
                <code>
                    class FirstClass {
                    
                    protected $item;

                    function __construct($ietm) {
                        $this->item = $ietm;
                    }

                }
                
                class SecondClass {
                    
                    protected $item;

                    function __construct($ietm) {
                        $this->item = $ietm;
                    }

                }
                
                $first = new FirstClass("a");
                $second = new SecondClass("a");
                $firstCopy = $first;
                $firstSimilar = new FirstClass("a");
                
                if($first == $second){
                    echo 'True';
                } else {
                    echo 'false';
                }
                
                echo '$first and $second is not equal.';
                
                if($first == $firstCopy){
                    echo 'True';
                } else {
                    echo 'false';
                }
                
                echo '$first and $firstCopy is equal.';
                
                if($first == $firstSimilar){
                    echo 'True';
                } else {
                    echo 'false';
                }
                
                echo '$first and $firstSimilar is equal.';
                
                if($first === $second){
                    echo 'True';
                } else {
                    echo 'false';
                }
                
                echo '$first and $second is not identical.';
                
                if($first === $firstCopy){
                    echo 'True';
                } else {
                    echo 'false';
                }
                
                echo '$first and $firstCopy is identical.';
                
                if($first === $firstSimilar){
                    echo 'True';
                } else {
                    echo 'false';
                }
                
                echo '$first and $firstSimilar is not identical.';
                
                
</code>
            </pre>
          </div>
        </div>
        
    </section>

    </body>
</html>
