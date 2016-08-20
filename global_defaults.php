<?php 
require "configuration.php";
if ($devmode == 1) {
    error_reporting(E_ALL);
} else {
    error_reporting(0);
}

/* Session Fixing */
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(!isset($_SESSION['refresh']) && empty($_SESSION['refresh'])) {
    $_SESSION['refresh'] = 0;
}
if (!array_key_exists('loggedin',$_SESSION) && empty($_SESSION['loggedin'])) {
    $_SESSION['username'] = "Not Logged In";
    $_SESSION['loggedin'] = 0;
}
$sess_username = $_SESSION['username'];

/* Session Fixing END */

$checkbanned = $conn->prepare("SELECT * FROM `us` WHERE banned=1");
$checkbanned->execute();

    while ($rowr = $checkbanned->fetch(PDO::FETCH_ASSOC)) { 
            $curr = date("Y-m-d");

            $checkunban = $conn->prepare("SELECT * FROM `bans` WHERE `ban_date`<:curr");
            $checkunban->bindParam(":curr", $curr);
            $checkunban->execute();

                while ($row2l = $checkunban->fetch(PDO::FETCH_ASSOC)) {
                    $to_unban_person = $rowr["username"];

                    $unban = $conn->prepare("DELETE FROM `bans` WHERE username=:ptounban");
                    $unban->bindParam(":ptounban", $to_unban_person);
                    $unban->execute();

                    $unban2 = $conn->prepare("UPDATE `us` SET `banned`=0 WHERE `username`=:checkfor0");
                    $unban2->bindParam(":checkfor0", $to_unban_person);
                    $unban2->execute();
                }


        
                if ($_SESSION['username'] == $rowr['username']) {
                    echo "<h1 style='font-size:200px;'>Banned!</h1>";
                    $_SESSION['username'] = "Banned";
                    $_SESSION['loggedin'] = 0;


                }

             }






