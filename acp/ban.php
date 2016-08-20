<?php require "../pdo_connect.php"; require "../global_defaults.php";
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
<a href="ban.php"> <li class="m active">Banning</li> </a>
<a href="sm.php"> <li class="b">Script Moderation</li> </a>
<!-- <a href="file.php"> <li class="b">Name</li> </a> -->
</ul>
</div>
<div class="main">
<h1>Ban a User</h1>
<div class="line"></div>
<br>
<!--
<div class="notification">
Test notification
</div>
-->
<?php 
// Get Users
    		$getuserlist = $conn->prepare("SELECT * FROM `us` WHERE banned=0");
			$getuserlist->execute();
?>
<text>
					<form action="execute.php" name="form" method="post" style="text-align:center;">

User's Name <br><br>
  			<select name="username" id="username">
  		<?php while ($row = $getuserlist->fetch(PDO::FETCH_ASSOC)) { ?>
    		<option value="<?php echo $row['username']; ?>"><?php echo $row['username']; ?></option>
<?php
 }
?>
    		</select>
<br><br><br>
Ban Reason <br><br>
	<textarea name="reason" placeholder="My very informative ban reason here"></textarea>
<br><br><br>
Un-ban Date (Must Follow Format: YYYY-MM-DD)<br><br>
	<input type="date" placeholder="YYYY-MM-DD <- MUST FOLLOW THAT FORMAT" name="unbandate">
	<textarea name="file" hidden>ban</textarea>
<br><br><br>
<input type="submit" class="submit" />
</form>
<br><br><br><br>


</text>

</div>
<br><br><br><br>
</body>
<?php }} ?>