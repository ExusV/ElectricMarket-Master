<?php require "../pdo_connect.php"; require "../global_defaults.php"; 
$username = $_SESSION['username'];
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
<a href="#"> <li class="t active">Dashboard</li> </a>
<a href="profile.php"> <li class="m">My Profile</li> </a>
<a href="#"> <li class="b">Notifications</li> </a>
<a href="new_script.php"> <li class="b">Post a New Script</li> </a>
</ul>
</div>
<div class="main">
<h1>Dashboard</h1>
<div class="line"></div>
<br>
<!--
<div class="notification">
Test notification
</div>
-->
    								<?php

$getscripts = $conn->prepare("SELECT * FROM project_sa");
$getscripts->execute();
while ($row = $getscripts->fetch(PDO::FETCH_ASSOC)) {
        $sec = $conn->prepare("SELECT * FROM us WHERE username=:user");
        $sec->bindParam(':user',$username);
        $sec->execute();


    while ($rowx = $sec->fetch(PDO::FETCH_ASSOC)) {
    	$checker = $rowx[$row["script_title"]];
    	if ($checker == $row["script_title"]) {

    		$geturl = $conn->prepare("SELECT * FROM project_sa WHERE script_title=:checker");
    		$geturl->bindParam(':checker', $checker);
$geturl->execute();
while ($row = $geturl->fetch(PDO::FETCH_ASSOC)) {

echo '
						<a href="../_' . $row["script_id"] .'.php">
    								<div class="script">
      									'. $row["script_titlex"] . '
      								</div><br>
      					</a>
';
}


    	}
    
}

}
?>

</div>
</body>