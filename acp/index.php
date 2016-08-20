<?php require "../pdo_connect.php"; require "../global_defaults.php"; 
$username = $_SESSION['username'];
$isadmin = $conn->prepare("SELECT * FROM `us` WHERE rank=1");
$isadmin->execute();
while ($isa = $isadmin->fetch(PDO::FETCH_ASSOC)) {
$getpactive = $_SESSION['username'];
if ($isa['username'] == $getpactive) {

?>
<head>
<title>Drastic Control</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="sidebar">
<br>
<div class="circle"></div>
<name><?php echo $_SESSION["username"]; ?></name><br><br>
<a class="minibtn" href="#">Notifications</a>
<a class="minibtn" href="#">Logout</a><br>
<br>
<!--
<div class="shcover">
<subhead>Home</subhead>
</div>
-->
<ul>
<a href="#"> <li class="t active">Admin Dashboard</li> </a>
<a href="ban.php"> <li class="m">Banning</li> </a>
<a href="sm.php"> <li class="b">Script Moderation</li> </a>
<!-- <a href="file.php"> <li class="b">Name</li> </a> -->
</ul>
</div>
<div class="main">
<h1>Admin Dashboard</h1>
<div class="line"></div>
<br>
<!--
<div class="notification">
Test notification
</div>
-->
<?php 
    		$getuserlist = $conn->prepare("SELECT * FROM `us`");
			$getuserlist->execute();


while ($row = $getuserlist->fetch(PDO::FETCH_ASSOC)) {

	   $cb = $conn->prepare("SELECT * FROM `bans`");
	$cb->execute();






echo '
							<div class="script">
      									<td><bigger>'. $row["username"] . '</bigger></td>
										<td>';
while ($bc = $cb->fetch(PDO::FETCH_ASSOC)) {
										 if ($row["username"] == $bc["username"]) {
											echo "<c style='color:red;'>Banned</c></td>";
										}
										}

										echo '

							<form action="execute.php" name="form" method="post">
							<input type="text" name="username" value="' . $row["username"] . '" hidden> </input>
							<input type="submit" value="Delete" class="minibtn" href="../php"></td>
						<textarea name="file" hidden>delete</textarea>
</form>
</script>
</div><br>
';


    	
    }


}}


?>

</div>
</body>