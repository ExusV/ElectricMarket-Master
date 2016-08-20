<?php
require "pdo_connect.php";
require "global_defaults.php";
$made = 0;
$username = $_SESSION["username"];
// bname stands for base_name
$bname = substr($_POST['bname'], 1);
$extract_bname = $_POST['bname'];
// ebn = extract bname
$ebn = $conn->prepare("SELECT * FROM `project_sa` WHERE img_url=:bname");
$ebn->bindParam(":bname", $extract_bname);
$ebn->execute();
while ($ginfo = $ebn->fetch(PDO::FETCH_BOTH)) {
$gid = $ginfo["script_id"]; // gid = get id (get the scripts id)
$sn = $ginfo["script_title"]; // sn = script name
$sp = $ginfo["script_postedby"]; // sp = script postedby (who posted the script) 
$gp = $ginfo["script_price"]; // gp = get price 

if ($ginfo["script_price"] == 0) {
	$made = 4;
	if ($made == 4) {
			if (file_exists($bname)) {
    header('Content-Description: Download Script');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($bname).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($bname));
    readfile($bname);
    exit;
} 
	}
}



if ($sp == $username) {
	$made = 1;
	if ($made == 1) {
		if (file_exists($bname)) {
    header('Content-Description: Download Script');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($bname).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($bname));
    readfile($bname);
    exit;
} 
	}
}

$isadmin = $conn->prepare("SELECT * FROM `us` WHERE rank=1");
$isadmin->execute();
while ($isa = $isadmin->fetch(PDO::FETCH_ASSOC)) {
$getpactive = $_SESSION['username'];
if ($isa['username'] == $getpactive) {
    $made = 2;
    	if ($made == 2) {
		if (file_exists($bname)) {
    header('Content-Description: Download Script');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($bname).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($bname));
    readfile($bname);
    exit;
} 
	}
}}


$getu = $conn->prepare("SELECT * FROM `us` WHERE username=:usr AND {$sn}=:tx");
$getu->bindParam(":usr", $username);
$getu->bindParam(":tx", $sn);
$getu->execute();
while ($usri = $getu->fetch(PDO::FETCH_BOTH)) {
	$made = 3;
	if ($made == 3) {
		if (file_exists($bname)) {
    header('Content-Description: Download Script');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($bname).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($bname));
    readfile($bname);
    exit;
} 
	}

}
}

/*
$bname = substr($_POST['bname'], 1);

if (file_exists($bname)) {
    header('Content-Description: Download Script');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($bname).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($bname));
    readfile($bname);
    exit;
} */
?>