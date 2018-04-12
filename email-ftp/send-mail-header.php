<h1>Sending Email with extra headers</h1>
<?php
// before php version 7.2.0
$headers = "";
if(isset($_REQUEST['cc'])){
    $headers .= "CC : " . $_REQUEST['cc'] . "\r\n";
}

if(isset($_REQUEST['bcc'])){
    $headers .= "BCC : " . $_REQUEST['bcc'] . "\r\n";
}
$result = mail("me@sanjibsinha.com", "Reminder", $_REQUEST['message'], $headers);

if($result){
    echo 'Your email was sent.';
}
else{
    echo 'Failed to send email.';
}




