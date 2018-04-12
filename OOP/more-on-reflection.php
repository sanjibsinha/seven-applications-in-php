<?php require '../header.php'; ?>
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
                    More on Reflection
                </h2>
            </a>
                <h4>Output</h4>
            <p class="lead mb-0">
                <?php
                require '../vendor/autoload.php';
                
//                $foo = new Sanjib\Foo();
//                $bar = new Sanjib\Bar("Bar");
                //var_dump($foo->sendMessage($bar));
                $bazz = new Sanjib\Bazz();
                $bazz->deliverJob();
                echo '<br>'; 
                $function = new ReflectionClass("Sanjib\Bazz");
                
                var_dump($function->inNamespace());echo '<br>';                
                var_dump($function->getName());echo '<br>';
                var_dump($function->getNamespaceName());echo '<br>';
                var_dump($function->getShortName());echo '<br>';
                var_dump($function->getMethods());echo '<br>';
                var_dump($function->isInternal());echo '<br>';
                var_dump($function->getDefaultProperties());echo '<br>';
                
                ?>
                
            </p>
          <h3>
                Code Snippet
            </h3>
             <pre>
                <code>
                    
</code>
            </pre>
          </div>
        </div>
        
    </section>

    </body>
</html>
