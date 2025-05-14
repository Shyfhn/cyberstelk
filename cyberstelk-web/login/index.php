<?php

session_start();

$_SESSION["user"]="";
$_SESSION["usertype"]="";

include("connection.php");

if($_POST){

    $nis=$_POST['usernis'];
    $password=$_POST['userpassword'];
    
    $error='<label for="promter" class="form-label"></label>';

    $result= $database->query("select * from webuser where nis='$nis'");
    if($result->num_rows==1){
        $utype=$result->fetch_assoc()['usertype'];
        if ($utype=='s'){
            $checker = $database->query("select * from siswa where snis='$nis' and spassword='$password'");
            if ($checker->num_rows==1){

                $_SESSION['nis']=$nis;
                $_SESSION['usertype']='s';
                
               header('location: ../main/home.php');

            }else{
                $error='<label for="promter" class="form-label" style="color:rgb(255, 255, 255);text-align:center;">Wrong credentials: Invalid username or password</label>';
            }

        }
        
    }else{
        $error='<label for="promter" class="form-label" style="color:rgb(255, 255, 255);text-align:center;">We cannot find the username</label>';
    }

}
    
else{
    $error='<label for="promter" class="form-label">&nbsp;</label>';
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <link rel="icon" href="../icon/cyberlogo.png" type="x-icon">
  <title>Login</title>
</head>

<body>
  <div class="login-container">
    <h1 style="font-family: jojoba;">L O G I N</h1>
    <form action="" method="post">
      <div class="form-group">
        <label for="usernis">USERNAME</label>
        <input type="text" id="usernis" name="usernis" placeholder="Enter your username">
        <label for="userpassword">PASSWORD</label>
        <input type="Password" id="userpassword" name="userpassword" placeholder="Enter your password">
      </div>

      <?php echo $error ?>

      <div class="signup-button">
        <button type="submit">Login</button>
        <br />
        <br />
        <a href="SignUp.php">Sign Up</a>
      </div>
    </form>
  </div>
  <a href="javascript:history.back()"></a>
  <a href="#" onclick="window.history.back(); return false;"></a>
</body>

</html>
