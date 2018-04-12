<?php require_once '../header.php'; ?>
    
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
            
<form method="GET" action="form-process.php">
           <div class="form-group">
    <label for="exampleText">Username</label>
    <input name="username" type="text" class="form-control" id="exampleInputType" aria-describedby="textHelp" placeholder="Enter Username">
    <small id="exampleInputTypeHelp" class="form-text text-muted">Please type your username.</small>
  </div>     
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
 <div class="form-group">
    <label for="exampleInputTextArea">A Few Words About Yourself</label>
    <textarea name="data" cols="80" rows="10">
        
    </textarea>
  </div>  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

            </p>
                <h3>
                Code Snippet
            </h3>
             <pre>
                <code>
                    <?php
                    
                    $form = '<form method="GET" action="form-process.php">
           <div class="form-group">
    <label for="exampleText">Username</label>
    <input name="username" type="text" class="form-control" id="exampleInputType" aria-describedby="textHelp" placeholder="Enter Username">
    <small id="exampleInputTypeHelp" class="form-text text-muted">Please type your username.</small>
  </div>     
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We will never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
 <div class="form-group">
    <label for="exampleInputTextArea">A Few Words About Yourself</label>
    <textarea name="data" cols="80" rows="10">
        
    </textarea>
  </div>  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>';
                    
                    echo nl2br(htmlspecialchars($form));
                    
                    ?>
                    <h4 class="alert-warning">Form processing code</h4>
                    
               /* 
 * This is form processing page
 */

if(is_string($_REQUEST['username'])){
    $name = $_REQUEST['username'];
    echo htmlspecialchars($name);
}

if(is_string($_REQUEST['email'])){
    $email = $_REQUEST['email'];
    echo htmlspecialchars($email);
}

if(is_string($_REQUEST['password'])){
    $password = $_REQUEST['password'];
    echo htmlspecialchars($password);
}

if(is_string($_REQUEST['data'])){
    $description = $_REQUEST['data'];
    echo nl2br(htmlspecialchars($description));
} 
<h4 class="alert-warning">You may want to dump form data at one go!</h4>

foreach ($_REQUEST as $key => $value) {
    
    echo $key . " = " . $value . "<br>";
    
    
}
</code>
            </pre>
            
        </div>
      </div>
        
        
    </section>
    </body>
</html>



