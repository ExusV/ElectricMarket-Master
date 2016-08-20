<?php session_start(); require "../pdo_connect.php"; $usrname = $_SESSION["username"]; ?>
<title>Loading...</title>

<?php

$checker = $conn->prepare("SELECT * FROM transactions WHERE payer_user=:username AND success='1'");
$checker->bindParam(":username", $usrname);
$checker->execute();

while ($row = $checker->fetch(PDO::FETCH_BOTH)) {

   $paidscript = $row["item_name"];

   $sql = $conn->prepare("UPDATE us SET {$paidscript}=:script WHERE username=:userr");
   $sql->bindParam(":userr", $usrname);
   $sql->bindParam(":script", $paidscript);
   $sql->execute();




    	   $del = $conn->prepare("UPDATE transactions SET success='0' WHERE payer_user=:userrr");
  		   $del->bindParam(":userrr", $usrname);
   		   $del->execute();

if ($_SESSION['refresh'] != 1) {
	$_SESSION['refresh'] = 1;
	echo '<meta http-equiv="content-type|default-style|refresh">';
} 

}
