<?php
session_start();
// suppose someone logged in
// $name = $_REQUEST['username'];
$name = "sanjib";
$_SESSION['username'] = $name;

if (empty($_SESSION['count'])) {
   $_SESSION['count'] = 1;
} else {
   $_SESSION['count']++;
}
?>

<p>
Welcome, you have come to this page <?php echo $_SESSION['count']; ?> times.
</p>

<p>
To continue further, <a href="nextpage.php?<?php echo htmlspecialchars(SID); ?>">click
here</a>.
</p>

<p>
    To see your name, <a href="get-session.php?<?php echo htmlspecialchars(SID); ?>">click
here</a>.
</p>