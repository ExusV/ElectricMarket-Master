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
<a href="profile.php"> <li class="m">My Profile</li> </a>
<a href="#"> <li class="b">Notifications</li> </a>
<a href="#"> <li class="b active">Post a New Script</li> </a>
</ul>
</div>
<div class="main">
<h1>Post a New Script</h1>
<div class="line"></div>
<br>
<!--
<div class="notification">
Test notification
</div>
-->
<text>
<form name="send" action="send.php" method="post" enctype="multipart/form-data" style="text-align:center;">
Script Name <br><br>
<input type="text" placeholder="My Cool Script Name" name="script_name"/>
<br><br><br>
Script Description <br><br>
<textarea name="script_description" placeholder="My very informative HTML description"></textarea>
<br><br><br>
Short Summary (10-20 Words MAX) <br><br>
<textarea name="script_short_summary" placeholder="My short summary that is ment to be from 10 to 20 words long"></textarea>
<br><br><br>
Script Price (In $/USD)<br><br>
<input type="text" placeholder="Price in $/USD" name="script_price" />
<br><br><br>
Upload your Script<br><br><br>
    <label name="img" for="file" class="file_button">UPLOAD</label>
<input type="file" name="img" id="file" style="display:none;" />
<br><br><br><br>
<input type="submit" />
</form>
<br><br><br><br>


</text>

</div>
<br><br><br><br>
</body>