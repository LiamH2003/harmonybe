<?php
session_start();
// Assume you've validated the user's credentials
$_SESSION['loggedin'] = true;
header("Location: ../homepage/index.php");
exit();
?>
