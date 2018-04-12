<?php require '../header.php'; ?>
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
                    Reflection Class
                </h2>
            </a>
                <h4 class="alert-success">Output</h4>
            <p class="lead mb-0">
                
                <?php
                require '../vendor/autoload.php'; 
                
                $examine = new Sanjib\ExaminingCodeClass();
                $examine->setCounter(10);
                echo $examine->getCounter();
                echo $examine->getCounter();
                echo $examine->getCounter();
                echo '<br>';
                
                ReflectionClass::export('Sanjib\ExaminingCodeClass');
                echo '<br>';
                
                $function = new \ReflectionClass('Sanjib\\ExaminingCodeClass');

                var_dump($function->inNamespace());echo '<br>';                
                var_dump($function->getName());echo '<br>';
                var_dump($function->getNamespaceName());echo '<br>';
                var_dump($function->getShortName());echo '<br>';
                
                $examiningCodeClass = new Sanjib\ExaminingCodeClass();
                $reflect = new ReflectionClass($examiningCodeClass);
                //$properties = $reflect->getProperties(ReflectionProperty::IS_PUBLIC);
//                foreach ($properties as $prop) {
//                    echo "The names of the public property is : " . $prop->getName() . "<br>";                    
//                }
                $properties = $reflect->getProperties();
                echo '<br>';
                
                foreach ($properties as $prop) {
                    echo "The names of the properties are : " . $prop->getName() . "<br>";                    
                }
                
                var_dump($properties);
                
                ?>
                
            </p>
          <h3 class="alert-success">
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
