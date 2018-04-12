<?php
            
            $allow = array("jpg", "jpeg", "gif", "png");

$todir = 'files/';

if ( !$_FILES['file']['tmp_name'] ) // has the file been uploaded yet?
{
    $info = explode('.', strtolower( $_FILES['file']['name']) ); // whats the extension of the file

    if ( in_array( end($info), $allow) ) // is this file allowed
    {
        if ( move_uploaded_file( $_FILES['file']['tmp_name'], $todir . basename($_FILES['file']['name'] ) ) )
        {
            // the file has been moved correctly
            echo 'uploaded';
        }
    }
    else
    {
        // error this file ext is not allowed
        throw new Exception;
    }
}
?>