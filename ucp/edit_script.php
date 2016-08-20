<?php 
require "../pdo_connect.php"; require "../global_defaults.php";
$id = $_GET['id'];
$user_current = $_SESSION['username']; 
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
<a href="index.php"> <li class="t">Dashboard</li> </a>
<a href="profile.php"> <li class="m">My Profile</li> </a>
<a href="#"> <li class="b">Notifications</li> </a>
<a href="#"> <li class="b">Post a New Script</li> </a>
</ul>
</div>
<div class="main">
<h1>Edit Your Script</h1>
<div class="line"></div>
<br>
<!--
<div class="notification">
Test notification
</div>
-->
			<?php if ($_SESSION['loggedin'] == 1) { ?>
		<?php
		
				$getvalues = $conn->prepare("SELECT * FROM `project_sa` WHERE script_id=:checkid");
				$getvalues->bindParam(':checkid', $id);
				$getvalues->execute();	
				while ($val = $getvalues->fetch(PDO::FETCH_BOTH)) {
				
/*				$check = $conn->prepare("SELECT * FROM `project_sa` WHERE script_postedby=:checkuser");
				$check->bindParam(':checkuser', $user_current);
				$check->execute(); */
				
				if ($user_current == $val['script_postedby']) {
					$made = 1;
				}
				
				$isadmin = $conn->prepare("SELECT * FROM `us` WHERE rank=1");
$isadmin->execute();
while ($isa = $isadmin->fetch(PDO::FETCH_ASSOC)) {
$getpactive = $_SESSION['username'];
if ($isa['username'] == $getpactive) {
$made = 2;
}}
							
				
				if ($made == 1 or $made == 2) {
					?>

<text>
<form name="send" action="edit_script_send.php" method="post" enctype="multipart/form-data" style="text-align:center;">
Script Name <br><br>
	<input type="text" value="<?php echo $val['script_titlex']; ?>" name="script_name" disabled/>
    <textarea name="script_name" hidden><?php echo $val['script_titlex']; ?></textarea>
<br><br><br>
Script Description <br><br>
    <textarea name="script_description"><?php echo $val['script_description']; ?></textarea>
    <textarea name="scriptid" hidden><?php echo $id; ?></textarea>
<br><br><br>
Short Summary (10-20 Words MAX) <br><br>
<textarea name="script_short_summary" placeholder="My short summary that is ment to be from 10 to 20 words long"></textarea>
<br><br><br>
Script Price (In $/USD) -- DO NOT LEAVE THIS BLANK<br><br>
	<input type="text" name="script_price" placeholder="Current Price: $<?php echo $val['script_price']; ?> DO NOT LEAVE THIS BLANK"/>
Upload your Script<br><br><br>
    <label name="img" for="file" class="file_button">UPLOAD</label>
<input type="file" name="img" id="file" style="display:none;" />
<br><br><br><br>
<input type="submit" />
</form>
<?php } else { echo "Our records indicate that you did not create this script so go away!"; } } } else { echo "Please Login to view this page"; } ?>
<br><br><br><br>


</text>

</div>
<br><br><br><br>
</body>