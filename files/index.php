<?php require '../header.php'; ?>
    <body>
        
       <!-- Image Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <h1 class="alert-light">File Handling</h1>
        </div>
        
        <div class="row no-gutters">
            
            <div class="col-lg-11 order-lg-1 my-auto showcase-text">
            <a href="#">
                <h2>
                    Image Mapping
                </h2>
            </a>
                <h4 class="alert-light">Output</h4>
            <p class="lead mb-0">
                
                <a href="image-map.php">Image Mapping</a>
                <br>
                <a href="file-one.php">Reading from a file</a>
                <br>
                <a href="file-two.php">Reading from a file by character</a>
                <br>
                <a href="file-three.php">Reading a file at once</a>
                <br>
                <a href="file-four.php">Reading a file into an Array</a>
                <br>
                <a href="file-upload.php">Upload a File</a>
                <br>
                <a href="if-file-exist.php">File Exists</a>
                <br>
                <a href="parse-ini-fle.php">Parsing .ini file</a>
                <br>
                <a href="getting-file-info.php">Get file info</a>
                <br>
                
            </p>
          <h3 class="alert-light">
                Code Snippet
            </h3>
            <!-- The data encoding type, enctype, MUST be specified as below -->
            <form enctype="multipart/form-data" action="process.php" method="POST">
    <!-- MAX_FILE_SIZE must precede the file input field -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- Name of input element determines name in $_FILES array -->
    Send this file: <input name="file" type="file" />
    <input type="submit" value="Send File" />
</form>
            
             <pre>
                <code>
                    
</code>
            </pre>
          </div>
        </div>
        
    </section>

    </body>
</html>
