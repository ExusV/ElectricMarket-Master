<?php require "../pdo_connect.php"; require "../global_defaults.php"; ?>
<?php $username = $_SESSION['username'];

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
<a class="minibtn" href="#">Logout</a><br>
<br>
<!--
<div class="shcover">
<subhead>Home</subhead>
</div>
-->
<ul>
<a href="index.php"> <li class="t">Admin Dashboard</li> </a>
<a href="ban.php"> <li class="m">Banning</li> </a>
<a href="sm.php"> <li class="b active">Script Moderation</li> </a>
<!-- <a href="file.php"> <li class="b">Name</li> </a> -->
</ul>
</div>
<div class="main">
<h1>Script Moderation</h1>
<div class="line"></div>
<br>
<!--
<div class="notification">
Test notification
</div>
-->
<text>
    								<?php



    		$getuserlist = $conn->prepare("SELECT * FROM `project_sa`");
			$getuserlist->execute();


while ($row = $getuserlist->fetch(PDO::FETCH_ASSOC)) {

echo '
<div class="script"  style="text-align:center;">
    								<bigger>
      									<td>'. $row["script_titlex"] . '</td><br>
									</bigger>	
										';
echo '
							<form action="execute.php" name="form" method="post" style="text-align:center; display:inline-block;">
							<input type="text" name="vstitle" value="' . $row["script_title"] . '" hidden> </input>
							<input type="submit" value="View" class="minibtnb" href="../php"></td>
						<textarea name="file" hidden>view_script</textarea>
</form>
';
										echo '
							<form action="execute.php" name="form" method="post" style="text-align:center; display:inline-block;">
							<input type="text" name="dstitle" value="' . $row["script_title"] . '" hidden> </input>
							<input type="submit" value="Delete" class="minibtnr" href="../php"></td>
						<textarea name="file" hidden>delete_script</textarea>
</form>
    								
';

										echo '
							<form action="execute.php" name="form" method="post" style="text-align:center; display:inline-block;">
							<input type="text" name="rstitle" value="' . $row["script_title"] . '" hidden> </input>
							<input type="submit" value="Restore" class="minibtng" href="../php"></td>
						<textarea name="file" hidden>restore_script</textarea>
</form>
    								</div>
    								<br>
';



    	
    }
    ?>

</text>

</div>
</body>
<?php } } ?>