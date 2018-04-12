<?php require_once '../header.php'; 
 

?>

    <body>
        <!-- Image Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <h1 class="alert-success">Form and File Handling</h1>
            <a href="form-validation.php">Validation Checking</a>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-11 order-lg-1 my-auto showcase-text">
            
            <p class="lead mb-0">            
           <?php
           require '../vendor/autoload.php';
           use Sanjib\FormShow;
           
           $form = new FormShow;
           $form->ShowForm();
           
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



