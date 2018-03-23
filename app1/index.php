<?php
ini_set('display_errors', '1');
/* 
 * how to send email in php
 */

$to = "me@sanjibsinha.com";

$subject = "How to send email in php";

$message = "Hi, this is a test, a very simple test.";

$additional_headers = "From: contact@sanjibsinha.com";

mail($to, $subject, $message, $additional_headers);

