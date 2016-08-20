<?php require "../pdo_connect.php"; require "../global_defaults.php"; ?>
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
<a href="index.php"> <li class="t">Dashboard</li> </a>
<a href="#"> <li class="m active">My Profile</li> </a>
<a href="#"> <li class="b">Notifications</li> </a>
<a href="new_script.php"> <li class="b">Post a New Script</li> </a>
</ul>
</div>
<div class="main">
<h1>My Profile {NOT WORKING, UNDER DEVELOPMENT}</h1>
<div class="line"></div>
<br>
<!--
<div class="notification">
Test notification
</div>
-->
<text>
<form name="profile" action="unknown.php" method="post" style="text-align:center;">
Username <br><br>
<input type="text" placeholder="Username" name="username"/>
<br><br><br>
Email <br><br>
<input type="text" placeholder="email@domain.com" name="email"/>
<br><br><br>
Bio <br><br>
<textarea name="bio" placeholder="My incredibly detailed awesome bio"></textarea>
<br><br><br><br>
<input type="submit" />
<br><br>


</text>

</div>
</body>