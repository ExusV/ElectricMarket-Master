<?php session_start();
if(isset($_SESSION['refresh']) && !empty($_SESSION['refresh'])) {
	$_SESSION['refresh'] = 0;
	$_SESSION['username'] = "Not Logged In";
	$_SESSION['loggedin'] = 0;
}
 ?>

<?php

function write() {
	require "pdo_connect.php";
}
	
?>