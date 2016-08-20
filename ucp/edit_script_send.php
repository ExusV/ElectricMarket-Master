<?php require "../pdo_connect.php"; require "../global_defaults.php"; ?>
<title>Project SA</title>
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


echo "Working <br>";
//error_reporting(0);

// Script Name
$script_name1 = $_POST['script_name'];
$script_name2 = str_replace("<script","",$script_name1);
$script_name = str_replace("<?","",$script_name2);

// Script Description
$script_description1 = $_POST['script_description'];
$script_description2 = str_replace("<script","",$script_description1);
$script_description = str_replace("<?","",$script_description2);

// Script Price
$script_price1 = $_POST['script_price'];
$script_price2 = str_replace("<script","",$script_price1);
$script_price = str_replace("<?","",$script_price2);

// Script Short Summary
$script_ss1 = $_POST["script_short_summary"];
$script_ss2 = str_replace("<script","",$script_ss1);
$script_ss = str_replace("<?","",$script_ss2);

// Who Posted the Script
$script_whoposted = $_SESSION["username"];

?>

<?php

$worked=1;
$file_up_size=$_FILES['img'][size];
if ($_FILES[img][size]>50000000){
echo "Your file size is above 50000KB's (50 MB's) please reduce it and re-upload it. If you somehow managed to get here then follow the instructions below. If you are not being mean and spamming our server contact a staff member<br>";
$worked=0;
}

$img_name = $_FILES[img][name];
$img_dir = "../uploads/$img_name";

if($worked == 1){
if(move_uploaded_file ($_FILES[img][tmp_name], $img_dir)){
echo 'File Sending...';
}
else {
    echo "File not detected!";
}

}

if ($img_dir == '../uploads/') {
  $img_dir = null;
}

echo '<br>' . $img_dir;
?>
<?php
	$script_titlex = $script_name;
	$script_description = $script_description;
	$script_price = $script_price;
	$script_postedby = $_SESSION['username'];
	$num_id = $_POST['scriptid'];
	$script_url = $img_dir;
	$script_minus_url = substr($script_url, 2);
	$script_title = str_replace(' ', '', $script_titlex);
	$script_ss = $script_ss;

// All of this is Very Dangerous if Messed with :/
	$kill_row = $conn->prepare("DELETE FROM `project_sa` WHERE script_id=:chck_id");
	$kill_row->bindParam(':chck_id', $num_id);
	$kill_row->execute();

	$value_script = array($num_id, $script_title, $script_description, $script_price, $script_postedby, $script_minus_url, $script_titlex, $script_ss);
    $query = $conn->prepare("INSERT INTO `project_sa`(`script_id`, `script_title`, `script_description`, `script_price`, `script_postedby`, `img_url`, `script_titlex`, `script_summary`) VALUES (?,?,?,?,?,?,?,?)");
    $query->execute($value_script);

}
?>
