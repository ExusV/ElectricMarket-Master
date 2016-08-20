<?php 
require "../pdo_connect.php"; require "../global_defaults.php";

$isadmin = $conn->prepare("SELECT * FROM `us` WHERE rank=1");
$isadmin->execute();
while ($isa = $isadmin->fetch(PDO::FETCH_ASSOC)) {
$getpactive = $_SESSION['username'];
if ($isa['username'] == $getpactive) {



$checkfile = $_POST['file'];
if ($checkfile == "ban") {
	$who = $_POST['username'];
	$reason = $_POST['reason'];
	$banner = $_SESSION['username'];
	$unban = $_POST['unbandate'];
	$today = date("Y-m-d");


	$insertban = $conn->prepare("UPDATE `us` SET `banned`=1 WHERE `username`=:usertoban");
	$insertban->bindParam(':usertoban', $who);
	$insertban->execute();

	$ib2_array = array($who, $reason, $unban, $today, $banner);
	$insertban2 = $conn->prepare("INSERT INTO `bans` (username, reason, lift_date, ban_date, administrator) VALUES (?,?,?,?,?)");
	$insertban2->execute($ib2_array);
	echo "Your ban has been executed";
   header( 'Location: index.php' );


}

if ($checkfile == "delete") {
	$who = $_POST['username'];
	$deluser = $conn->prepare("DELETE FROM `us` WHERE username=:who");
	$deluser->bindParam(":who", $who);
	$deluser->execute();
	echo "You have deleted " . $who . "'s account";

	$checkscripts = $conn->prepare("DELETE FROM `project_sa` WHERE `script_postedby`=:who OR `job_postedby`=:who");
	$checkscripts->bindParam(":who", $who);
}

if ($checkfile == "view_script") {
	$vstitle = $_POST['vstitle'];

	$getid = $conn->prepare("SELECT * FROM `project_sa` WHERE `script_title`=:vstitle");
	$getid->bindParam(":vstitle", $vstitle);
	$getid->execute();

	while ($gid = $getid->fetch(PDO::FETCH_ASSOC)) {
		$id = $gid["script_id"];
		$script_link = "../_" . $id . ".php";
		header('Location: '. $script_link);
	}


}

if ($checkfile == "delete_script") {
	$dstitle = $_POST['dstitle'];
	$dsbind = array($dstitle);
	$dscript = $conn->prepare('UPDATE project_sa SET script_del=1 WHERE script_title=?');
	$dscript->execute($dsbind);
}

if ($checkfile == "restore_script") {
	$rstitle = $_POST['rstitle'];
	$rsbind = array($rstitle);
	$rscript = $conn->prepare('UPDATE project_sa SET script_del=0 WHERE script_title=?');
	$rscript->execute($rsbind);
}


}}


?>