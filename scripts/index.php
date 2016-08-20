<?php session_start(); require "../pdo_connect.php"; require "../global_defaults.php"; ?>
<?php 
$username = $_SESSION['username'];
 ?>
<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="renderer" content="webkit">
     <title>Project SA | UCP</title>
    <link type="text/css" rel="stylesheet" href="resource/css/framework.css" />
    <link type="text/css" rel="stylesheet" href="resource/css/main.css" />
    <style>
.loader {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url('../source/images/loader.gif') 50% 50% no-repeat rgb(249,249,249);
}

  </style>

  <div class="loader"></div>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
$(window).load(function() {
  $(".loader").fadeOut("slow");
})
</script>

    </head>
<body>
<div class="page">

<header>
	<div class="bigcontainer">
		<div class="user fadeIn">
			<div class="ui inline labeled icon top right pointing dropdown">
			<img class="ui avatar image" src="resource/images/avatar-default.gif">
			<?php 
			if ($_SESSION['username'] !== '') {
			echo $_SESSION['username']; 
		} else {
			echo "Not Logged in";
		}
			?>
			<i class="dropdown icon"></i>
				<div class="menu">
					<a class="item" href="notifications.php"><i class="reply mail icon"></i>Notifications</a>
					<a class="item" href="../logout.php"><i class="sign out icon"></i>Sign Out</a>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- the main menu-->
<div class="ui teal inverted menu fluid ">
	<div class="bigcontainer">
		<div class="right menu">
			<a class="item" href="../index.php"><i class="home icon"></i>Home</a>
			<a class="item" href="../ucp"><i class="user icon"></i>UCP</a>
			<a class="active item" href="../scripts.php"><i class="sitemap icon"></i>Scripts</a>
			<a class="item" href="../jobs.php"><i class="info icon"></i>Jobs</a>
		</div>
	</div>
</div>

<div class="ui container">
			<!--the newDevice form-->
			<div class="four wide column fadeIn">
				<div class="pageHeader">
					<div class="segment">
						<h3 class="ui dividing header">
  							<i class="large terminal icon"></i>
  							<div class="content">
    							Scripts
    							<div class="sub header">Browse our selection of scripts</div>
  							</div>
						</h3>
					</div>
				</div>
				<div class="ui vertical segment">
				<?php if ($_SESSION['loggedin'] == 1) { ?>
					<a class="ui red small labeled icon add button" href="../ucp"><i class="add icon"></i>Purchased Scripts</a>
				</div>
				<?php } ?>
				<div class="ui form fluid vertical segment">
    								<?php

$getscripts = $conn->prepare("SELECT * FROM project_sa");
$getscripts->execute();

?>


<div class="four wide column">

                <!--the device content-->
				<div class="ui device two column middle aligned vertical grid segment">




<?php
    while ($row = $getscripts->fetch(PDO::FETCH_ASSOC)) { 
?>
                    <div class="column verborder">
							<div class="ui info segment">
                                <h5 class="ui header"><font><font><?php echo $row["script_title"]; ?></font></font>
                                </h5>
								<p><font><font>Script ID: <?php echo $row["script_id"]; ?></font></font></p>
                            <p><font><font>Summary: <?php echo $row["script_summary"]; ?></font></font></p>
                            <p><font><font>Posted By: <?php echo $row["script_postedby"]; ?></font></font></p>
<span class="ui type label"><font><font><?php echo "$" . $row["script_price"] ?></font></font></span>
                    </div>
  					<div class="right aligned column">
    					<div class="ui buttons">
						<a class="ui tiny green button" href=<?php echo '../_' . $row["script_id"] . '.php';  ?>><i class="search icon"></i><font><font>View</font></font></a>
						</div>
  					</div>
				</div>
				<br>






<?php
}
?>
</div>

<!--footer begin-->

<script type="text/javascript" src="resource/javascript/jquery.min.js"></script>
<script type="text/javascript" src="resource/javascript/framework.js"></script>
<script>
	$('.ui.dropdown')
		.dropdown();
</script>
</body>
</html>
