<?php require "../pdo_connect.php"; require "../global_defaults.php"; ?>
<?php
	require "../pdo_connect.php";

	$script_id = $_POST['script_id'];
	$script_titlex = $_POST['script_name'];
	$script_description = $_POST['script_description'];
	$script_price = $_POST['script_price'];
	$script_postedby = $_SESSION['username'];
	$num_id = substr($script_id, 4, -4);
	$script_url = $_POST['img_url'];
	$script_link = $_POST['s_link'];
	$script_minus_url = substr($script_url, 2);
	$script_title = str_replace(' ', '', $script_titlex);
	$script_ss = $_POST['script_short_summary'];




	$value_script = array($num_id, $script_title, $script_description, $script_price, $script_postedby, $script_minus_url, $script_titlex, $script_ss);
    $query = $conn->prepare("INSERT INTO `project_sa`(`script_id`, `script_title`, `script_description`, `script_price`, `script_postedby`, `img_url`, `script_titlex`, `script_summary`) VALUES (?,?,?,?,?,?,?,?)");
    $query2 = $conn->prepare("ALTER TABLE  `us` ADD  `$script_title` mediumtext NOT NULL");
    $query->execute($value_script);
    $query2->execute();
?>
<!-- <meta http-equiv="refresh" content="0;URL='../'" /> -->
