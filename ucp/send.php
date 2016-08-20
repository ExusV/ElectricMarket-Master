<?php require "../pdo_connect.php"; require "../global_defaults.php"; ?>
<title>Project SA</title>
<?php
require "../pdo_connect.php";
echo "Working <br>";
$username = $_SESSION["username"];
//error_reporting(0);
$isbanned = $conn->prepare("SELECT * FROM `us` WHERE username=:usernme");
$isbanned->bindParam(":usernme", $username);
$isbanned->execute();

while ($gb = $isbanned->fetch(PDO::FETCH_BOTH)) {
	if ($gb["banned"] == 1) {
		echo "You are banned, piss off mate";
	} else {


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
echo "Your file size is above 50000KB's (50 MB's) please reduce it and re-upload it. If you somehow managed to get here 1. Fuck you 2. Follow the instructions below. If you are not being a cunt and spamming our server contact a staff member<br>";
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
$bname =  "../_";
$ext = ".php";          
$out = $bname;
$j = 1;

while (file_exists($out)){
    $out = $bname . $j . $ext;
    $j++;
}
$handler = fopen($out, 'w') or die("WARNING: Your script has failed to upload, please try again");

$open = fopen ($out, 'a');
$filename = '$filename';
$num1 = '$num';
$sqll = '$query=$conn->prepare';
$sql = <<<te
$sqll("SELECT * FROM `project_sa` WHERE `script_id`='$num1'") 
te;

$show = '
?>
<?php require "global_defaults.php"; ?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Standard Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
    <title>Script | <?php echo $num; ?></title>
  <link rel="stylesheet" type="text/css" href="source/semantic.css">
  <link rel="stylesheet" type="text/css" href="source/dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="source/dist/components/site.css">

  <link rel="stylesheet" type="text/css" href="source/dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="source/dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="source/dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="source/dist/components/image.css">
  <link rel="stylesheet" type="text/css" href="source/dist/components/menu.css">

  <link rel="stylesheet" type="text/css" href="source/dist/components/divider.css">
  <link rel="stylesheet" type="text/css" href="source/dist/components/dropdown.css">
  <link rel="stylesheet" type="text/css" href="source/dist/components/segment.css">
  <link rel="stylesheet" type="text/css" href="source/dist/components/button.css">
  <link rel="stylesheet" type="text/css" href="source/dist/components/list.css">
  <link rel="stylesheet" type="text/css" href="source/dist/components/icon.css">
  <link rel="stylesheet" type="text/css" href="source/dist/components/sidebar.css">
  <link rel="stylesheet" type="text/css" href="source/dist/components/transition.css">

  <style type="text/css">

    .hidden.menu {
      display: none;
    }

    .masthead.segment {
      min-height: 700px;
      padding: 1em 0em;
    }
    .masthead .logo.item img {
      margin-right: 1em;
    }
    .masthead .ui.menu .ui.button {
      margin-left: 0.5em;
    }
    .masthead h1.ui.header {
      margin-top: 3em;
      margin-bottom: 0em;
      font-size: 4em;
      font-weight: normal;
    }
    .masthead h2 {
      font-size: 1.7em;
      font-weight: normal;
    }

    .ui.vertical.stripe {
      padding: 8em 0em;
    }
    .ui.vertical.stripe h3 {
      font-size: 2em;
    }
    .ui.vertical.stripe .button + h3,
    .ui.vertical.stripe p + h3 {
      margin-top: 3em;
    }
    .ui.vertical.stripe .floated.image {
      clear: both;
    }
    .ui.vertical.stripe p {
      font-size: 1.33em;
    }
    .ui.vertical.stripe .horizontal.divider {
      margin: 3em 0em;
    }

    .quote.stripe.segment {
      padding: 0em;
    }
    .quote.stripe.segment .grid .column {
      padding-top: 5em;
      padding-bottom: 5em;
    }

    .footer.segment {
      padding: 5em 0em;
    }

    .secondary.pointing.menu .toc.item {
      display: none;
    }

    @media only screen and (max-width: 700px) {
      .ui.fixed.menu {
        display: none !important;
      }
      .secondary.pointing.menu .item,
      .secondary.pointing.menu .menu {
        display: none;
      }
      .secondary.pointing.menu .toc.item {
        display: block;
      }
      .masthead.segment {
        min-height: 350px;
      }
      .masthead h1.ui.header {
        font-size: 2em;
        margin-top: 1.5em;
      }
      .masthead h2 {
        margin-top: 0.5em;
        font-size: 1.5em;
      }
    }


  </style>

  <style>
.loader {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url("source/images/loader.gif") 50% 50% no-repeat rgb(249,249,249);
}

  </style>

  <div class="loader"></div>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
$(window).load(function() {
  $(".loader").fadeOut("slow");
})
</script>


  <script src="source/themes/default/assets/library/jquery.min.js"></script>
  <script src="source/dist/components/visibility.js"></script>
  <script src="source/dist/components/sidebar.js"></script>
  <script src="source/dist/components/transition.js"></script>
  <script>
  $(document)
    .ready(function() {

      // fix menu when passed
      $(".masthead")
        .visibility({
          once: false,
          onBottomPassed: function() {
            $(".fixed.menu").transition("fade in");
          },
          onBottomPassedReverse: function() {
            $(".fixed.menu").transition("fade out");
          }
        })
      ;

      // create sidebar and attach to menu open
      $(".ui.sidebar")
        .sidebar("attach events", ".toc.item")
      ;

    })
  ;
  </script>
</head>
<body class="pushable">

<!-- Following Menu -->
<div class="ui large top fixed menu transition hidden">
  <div class="ui container">
<a href="index.php" class="active item">Home</a>
  <a href="jobs.php" class="item">Jobs</a>
  <a href="scripts" class="item">Scripts</a>
  <a href="about.php" class="item">About</a>
       <?php if ($_SESSION["loggedin"] !== 1) { ?>
      
  <a href="login.php" class="item">Login</a>
  <a href="login.php" class="item">Signup</a>
 <?php } else { ?>
 <?php if ($_SESSION["admin"] !== 1) { ?>
  <a href="ucp/" class="item">UCP</a>
 <?php } else { ?>
    <a href="ucp/" class="item">UCP</a>
    <a href="ucp/" class="item">ACP</a>
 <?php }
  } ?>



    </div>
  </div>
</div>

<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu left">
<a href="index.php" class="active item">Home</a>
  <a href="jobs.php" class="item">Jobs</a>
  <a href="scripts" class="item">Scripts</a>
  <a href="about.php" class="item">About</a>
 <?php if ($_SESSION["loggedin"] !== 1) { ?>
  <a href="login.php" class="item">Login</a>
  <a href="login.php" class="item">Signup</a>
 <?php } else { ?>
 <?php if ($_SESSION["admin"] !== 1) { ?>
  <a href="ucp/" class="item">UCP</a>
 <?php } else { ?>
    <a href="ucp/" class="item">UCP</a>
    <a href="ucp/" class="item">ACP</a>
 <?php }
  } ?>
</div>


<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment">

    <div class="ui container">
      <div class="ui large secondary inverted pointing menu">
        <a class="toc item">
          <i class="sidebar icon"></i>
        </a>

         <a href="index.php" class="active item">Home</a>
  <a href="jobs.php" class="item">Jobs</a>
  <a href="scripts" class="item">Scripts</a>
  <a href="about.php" class="item">About</a>

  
      <div class="right item">
 <?php if ($_SESSION["loggedin"] !== 1) { ?>
  <a href="login.php" class="ui inverted button">Login</a>
  <a href="login.php" class="ui inverted button">Signup</a>
 <?php } else { ?>
 <?php if ($_SESSION["admin"] !== 1) { ?>
  <a href="ucp" class="ui inverted button">UCP</a>
 <?php } else { ?>
    <a href="ucp/" class="ui inverted button">UCP</a>
    <a href="ucp/" class="ui inverted button">ACP</a>
 <?php }
  } ?>
  </div>

      </div>
    </div>

<?php


    while ($row = $query->fetch(PDO::FETCH_ASSOC))
    {
      $branded_m_img_url = $row["img_url"];

//Download Files path




?>

        <div class="ui text container">
      <h1 class="ui inverted header">
        <?php echo $row["script_titlex"]; ?>
      </h1>
      <h2><?php echo "$" . $row["script_price"] ?></h2>
    </div>

  </div>
  </div>

      <div style="background-color:white;" class="ui vertical stripe segment">
    <div class="center aligned column">
          <p style="text-align:center;"><?php echo $row["script_description"]; $script_price = $row["script_price"]; ?></p>
	</div><br>
    <div class="ui middle aligned stackable grid container">

      <div class="row">
        <div class="center aligned column">

                              <?php
                              $made = 0;
      $u = $_SESSION["username"];

      $usr_sel = $conn->prepare("SELECT * FROM us WHERE username=:usname");
      $usr_sel->bindParam(":usname", $u);
      $usr_sel->execute();

      while ($gu = $usr_sel->fetch(PDO::FETCH_BOTH)) {


$getscripts = $conn->prepare("SELECT * FROM project_sa WHERE script_id=:checkid");
$getscripts->bindParam(":checkid", $num);
$getscripts->execute();
while ($row2 = $getscripts->fetch(PDO::FETCH_BOTH)) {

      $checker = $gu[$row2["script_title"]];
      if ($row2["script_postedby"] == $u) {
      		      echo "You made this script! You can download it at any time :)" . "<br>";
    echo \'
      <form method="post" action="dl.php">
    <input name="bname" value="\' . $branded_m_img_url . \'" hidden></input>
    <input type="submit" class="ui huge button" value="Download"></input>
    </form>
        You are able to edit this script here:
          <form method="get" action="ucp/edit_script.php">
    <input name="id" value="\' . $num . \'" hidden></input>
    <input type="submit" class="ui huge button" value="Edit"></input>
    </form>
    \';
          $made = 1;
      } else {
        $made = 0;
      }
  
}
      
      $acc_sel = $conn->prepare("SELECT * FROM project_sa WHERE script_id=:checkr");
      $acc_sel->bindParam(":checkr", $num);
      $acc_sel->execute();

      while ($select = $acc_sel->fetch(PDO::FETCH_BOTH)) {




/* !!UNPAID CHECK START!! */
if ($made == 0) {
$isadmin = $conn->prepare("SELECT * FROM `us` WHERE rank=1");
$isadmin->execute();
while ($isa = $isadmin->fetch(PDO::FETCH_ASSOC)) {
$getpactive = $_SESSION[\'username\'];
if ($isa[\'username\'] == $getpactive) {
  echo \'
  You are able to download this script here:
  <form method="post" action="dl.php">
    <input name="bname" value="\' . $branded_m_img_url . \'" hidden></input>
    <input type="submit" class="ui huge button" value="Download"></input>
    </form>
        You are able to edit this script here:
          <form method="get" action="ucp/edit_script.php">
    <input name="id" value="\' . $num . \'" hidden></input>
    <input type="submit" class="ui huge button" value="Edit"></input>
    </form>
    \';
    $made = 2;
  }
}}


if ($select["script_price"] == 0) {
	echo \'	The script is free!
	<form method="post" action="dl.php">
    <input name="bname" value="\' . $branded_m_img_url . \'" hidden></input>
    <input type="submit" class="ui huge button" value="Download"></input>
    </form> \';
    $checker = "free";
    $made = 2;

}

if ($select["script_del"] == 1) {
    $made = 2;
    echo "This script has been deleted, if you have already bought it there should be a download option somewhere in this page.";
}


if ($made == 0) {
if ($checker === "") {
 
 if(!function_exists("pay_form")) {
  function pay_form($data) {

      define( \'SSL_URL\', \'https://www.paypal.com/cgi-bin/webscr\' );
      define( \'SSL_SAND_URL\', \'https://www.sandbox.paypal.com/cgi-bin/webscr\' );

      $action = \'\';
      //Is this a test transaction? 
      $action = ($data[\'paypal_mode\']) ? SSL_SAND_URL : SSL_URL;

      $form = \'\';

      $form .= \'<form name="frm_payment_method" action="\' . $action . \'" method="post">\';
      $form .= \'<input type="hidden" name="business" value="\' . $data[\'merchant_email\'] . \'" />\';
      // Instant Payment Notification & Return Page Details /
      $form .= \'<input type="hidden" name="notify_url" value="\' . $data[\'notify_url\'] . \'" />\';
      $form .= \'<input type="hidden" name="cancel_return" value="\' . $data[\'cancel_url\'] . \'" />\';
      $form .= \'<input type="hidden" name="return" value="\' . $data[\'thanks_page\'] . \'" />\';
      $form .= \'<input type="hidden" name="rm" value="2" />\';
      // Configures Basic Checkout Fields -->
      $form .= \'<input type="hidden" name="lc" value="" />\';
      $form .= \'<input type="hidden" name="no_shipping" value="1" />\';
      $form .= \'<input type="hidden" name="no_note" value="1" />\';
      $form .= \'<input type="hidden" name="custom" value="\' . $data[\'username\'] . \'" />\';
      // <input type="hidden" name="custom" value="localhost" />-->
      $form .= \'<input type="hidden" name="currency_code" value="\' . $data[\'currency_code\'] . \'" />\';
      $form .= \'<input type="hidden" name="page_style" value="paypal" />\';
      $form .= \'<input type="hidden" name="charset" value="utf-8" />\';
      $form .= \'<input type="hidden" name="item_name" value="\' . $data[\'product_name\'] . \'" />\';
      $form .= \'<input type="hidden" value="_xclick" name="cmd"/>\';
      $form .= \'<input type="hidden" name="amount" value="\' . $data[\'amount\'] . \'" />\';
      
      $form .= \'</form>\';
      $form .= \'<script>\';
      $form .= \'setTimeout("document.frm_payment_method.submit()", 0);\';
      $form .= \'</script>\';
      return $form;

    }
}

$username = $_SESSION["username"];
$data=array(
\'merchant_email\'=>\'$paypal_email\',
\'product_name\'=>$select["script_title"],
\'username\'=>$_SESSION["username"],
\'amount\'=>$select["script_price"],
\'currency_code\'=>\'USD\',
\'thanks_page\'=>"http://wafflezzz.xyz/Project%20SA%20Theme/ipn/set.php#success",
\'notify_url\'=>"http://wafflezzz.xyz/Project%20SA%20Theme/ipn/ipn.php",
\'cancel_url\'=>"http://wafflezzz.xyz/Project%20SA%20Theme/index.php",
\'paypal_mode\'=>true
);  
if(isset($_POST[\'pay_now\'])){
echo \'<link rel="stylesheet" type="text/css" href="style.css" />\';
echo \'<div class="wait">PayPal is processing the payment, please wait...</div> 
<br><br><br><br>\';
echo \'  
<style>
.loader {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url("source/images/loader.gif") 50% 50% no-repeat rgb(249,249,249);
}

  </style>

<div class="loader"></div>

<br><br><br><br>\';
echo pay_form($data);
}else{
  ?>

<div id="product">
<form id=\'paypal-info\' method=\'post\' action=\'#\'>
<input type=\'submit\' name=\'pay_now\' class="ui huge button" id=\'pay_now\' value=\'Buy this Script\' />
</form>
</div>


</html>
<?php
}





} else {
      echo "You own this script and can download it!" . "<br>";
    echo \'
      <form method="post" action="dl.php">
    <input name="bname" value="\' . $branded_m_img_url . \'" hidden></input>
    <input type="submit" class="ui huge button" value="Download"></input>
    </form>
    \';

}

 // While end
}
}
}
}


/* !!UNPAID CHECK END!! */




?>

</div></div></div></div>
  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header">About</h4>
          <div class="ui inverted link list">
            <a href="contact.php" class="item">Contact The Developer</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Services</h4>
          <div class="ui inverted link list">
            <a class="item">UNDER CONSTRUCTION</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Information</h4>
          <p>Thank you for visiting this site, I did the PHP and then used the Semantic Framework to do the css.</p>
        </div>
      </div>
    </div>
  </div>
</div>
</body></html>
    ';
$exec = '$query'; 
$exec2 = "->";
$exec3 = "execute()";
$full = $exec . $exec2 . $exec3;
$txt = "<?php session_start(); include 'functions.php'; require 'pdo_connect.php'; $filename = '$out'; write(); 
	$num1 = substr('$out', 4, -4);
	$sql;
    $full;
    $show
    ";
fwrite($open, $txt);
fclose($open);
$script_id = $out;
?>




<table>
	<!---->
<tr>
	<form name="send" action="pdo_insert_send.php" method="post" enctype="multipart/form-data">
<td>
	<!---->
	<tr>
		<td colspan="3"><headerlogin>Submit a Script</headerlogin></td>
	</tr>
	<!---->
	<tr>
		<td width="700"><input type="text" name="script_name" value="<?php echo $script_name; ?>" placeholder="Script Title" hidden /></td>
	</tr>
	<!---->
  <tr>
    <td width="700"><input type="text" name="script_description" value="<?php echo $script_description; ?>" hidden placeholder="Script Description" />
  </td>
  </tr>
  <!---->
  <tr>
		<td width="700"><input type="text" name="script_price" value="<?php echo $script_price; ?>" placeholder="Script Price" hidden /></td>
  </tr>
  <!---->
    <tr>
		<td width="700"><input type="text" name="script_postedby" value="<?php echo $script_whoposted; ?>" placeholder="Script Price" hidden /></td>
  </tr>
  <!---->
   <tr>
		<td width="700"><input type="text" name="script_id" value="<?php echo $script_id; ?>" placeholder="Script Price" hidden /></td>
   </tr>
	<!---->
     <tr>
    <td width="700"><input type="text" name="s_link" value="<?php echo $out; ?>" placeholder="Script Price" hidden /></td>
   </tr>
  <!---->
   <tr>
    <td width="700"><input type="text" name="img_url" value="<?php echo $img_dir; ?>" placeholder="Script URL" hidden /></td>
   </tr>
  <!---->
   <tr>
    <td width="700"><input type="text" name="script_short_summary" value="<?php echo $script_ss; ?>" placeholder="Script Summary" hidden /></td>
   </tr>
  <!---->
   <tr>
		<td width="700"><input type="submit" name="Continue" class="btn" value="Submit!" /></td>
   </tr>
	<tr>
		<td colspan="3"><noaccount>Project E</noaccount></td>
	</tr>
	<tr>

	</tr>
</table>
</td>
</form>

<?php }} ?>