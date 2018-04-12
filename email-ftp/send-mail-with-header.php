<!DOCTYPE html>
<!--
Sending Email with header
-->
<html>
    <?php require '../header.php'; ?>
    <body>
        <section class="showcase">
        <div class="container-fluid p-0">
            <h1>Email and FTP</h1>
        </div>
        
        <div class="col-lg-11 order-lg-1 my-auto showcase-text">
        
            <form method="POST" action="send-mail-header.php">
                <div class="form-group">
                <label for="exampleText">CC</label>
                <input name="cc" type="text" placeholder="Copy of your mail">
                <small id="exampleInputTypeHelp" class="form-text text-muted">Send Comment.</small>
                </div>
                <div class="form-group">
                <label for="exampleText">BCC</label>
                <input name="bcc" type="text" placeholder="Copy of your mail">
                <small id="exampleInputTypeHelp" class="form-text text-muted">Send Comment.</small>
                </div>
                <div class="form-group">
                <label for="exampleInputTextArea">Please send your comment</label>
                <textarea name="message" cols="80" rows="10">

                </textarea>
                </div>  
             <button type="submit" class="btn btn-primary">Submit</button>
</form>
        
        </div>
        </section>
    </body>
</html>
