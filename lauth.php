<?php session_start(); ?>

<script src="sweetalert/dist/sweetalert.min.js">
</script>
<link rel="stylesheet" type="text/css" href="sweetalert/dist/sweetalert.css">

<?php
    require "pdo_connect.php";
        $username = $_POST['myusername'];
        $mypassword = $_POST['mypassword'];
        $defaultrank = "user";
        $v1 = $password;
        $v2 = $username;
   
            $hashresult = $conn->prepare("SELECT * FROM us WHERE username=:user");
            $hashresult->bindParam(':user', $v2);
            $hashresult->execute();

            
        while ($row = $hashresult->fetch(PDO::FETCH_ASSOC))
        {    
        if(password_verify($mypassword, $row['password'])) {
            echo "Authentication Successful!";
            $_SESSION['loggedin'] = 1;
            $_SESSION['username'] = $row['username'];
            $_SESSION['admin'] = 0;
            echo '<meta http-equiv="refresh" content="0; url=index.php" />';
        } else {
            echo "<br> 
            <b>If you can see the loading bar moving, it means your being redirected</b><br><br>
            If you have not been redirected the login has probably failed, please return to the login page and try again.";
        }
        
        
}
        
    
?>