<?php

echo '<h1>Seding Simple Mail</h1>';

// The message
$msg = "Hi,\r\nHow are\r\nyou?";

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($msg, 70, "\r\n");

// Send
mail('me@sanjibsinha.com', 'My Subject', $message);


echo '<h1>Seding Mail with extra headers</h1>';

$to      = 'me@sanjibsinha.com';
$subject = 'Reminder of Book';
$message = 'hello, please send me the book at once.';
$headers = 'From: webmaster@sanjibsinha.com' . "\r\n" .
    'Reply-To: webmaster@sanjibsinha.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

echo '<h1>Seding Mail with extra headers (available as of 7.2.0)</h1>';

$to      = 'me@sanjibsinha.com';
$subject = 'Reminder of Book';
$message = 'hello, please send me the book at once.';
$headers = [
    'From' => 'webmaster@sanjibsinha.com',
    'Reply-To' => 'webmaster@sanjibsinha.com',
    'X-Mailer' => 'PHP/' . phpversion()
];
mail($to, $subject, $message, $headers);

echo '<h1>Seding HTML Mail</h1>';

// Multiple recipients
$to = 'me@sanjibsinha.com, sanjib@sanjibsinha.com'; // note the comma

// Subject
$subject = 'Birthday Reminders for August';

// Message
$message = '
<html>
<head>
  <title>hello, please send me the book at once.</title>
</head>
<body>
  <p>hello, please send me the book at once.</p>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: Sanjib <sanjib@sanjibsinha.com>, Amitakhkhar <amitakkhar@sanjibsinha.com>';
$headers[] = 'From: Book Reminder <me@sanjibsinha.com>';
$headers[] = 'Cc: webmaster@sanjibsinha.com';
$headers[] = 'Bcc: webmaster@sanjibsinha.com';

// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));
