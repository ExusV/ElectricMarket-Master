<?php session_start(); ?>
<?php 
unset($_SESSION['username']);
unset($_SESSION['loggedin']);


?>
<meta http-equiv="refresh" content="0; url=login.php#logoutsuccess" />
