
<?php require "../pdo_connect.php"; ?>
<?php 
	$username2 = $_POST['username'];
	$username1 = str_replace("<?","",$username2);
	$username = str_replace("<script","",$username1);
	$email = $_POST['email'];
	$mypassword = $_POST['password'];
	$defaultrank = 1;
   $password=password_hash($mypassword, PASSWORD_DEFAULT);
?>

<?php 
	if ($username == "" or $username == " " or $username == "null" or $username == "nil") {
		echo "Sorry! Your username is not allowed, please change it!";
		return;
	}
?>

<?php

    $sql = $conn->prepare("INSERT INTO us (username, password, email, rank)
    VALUES (?,?,?,?)");
    $values = array($username,$password,$email,$defaultrank);
    $sql->execute($values);
    echo "User Successfully Registered";
    echo '<meta http-equiv="refresh" content="0; url=inf.php" />';

$conn = null;

?>

