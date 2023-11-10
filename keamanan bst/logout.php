<?php
session_start();
$_SESSION=[];
// Clear session data
session_unset();
session_destroy();
setcookie('id','',time() - 3600);

// Redirect to the login page
header('Location: index.php');
exit();
?>
