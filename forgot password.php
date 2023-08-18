<?php 
session_start();
error_reporting(1);
if($_SESSION['create_account_logged_in']!="") {
  header('location:Booking Form.php');
}
error_reporting(1);
require('connection.php');
extract($_REQUEST);
if(isset($reset))
{
  $eid = $_POST['eid'];
  $pass = $_POST['pass'];
  $rpass = $_POST['rpass'];

  if ($eid==""){
    $error= "<h4 style='color:red;text-align:center;'>Please Enter Email Address</h4>";  
  }
  else if( $pass !== $rpass){
    $error= "<h4 style='color:red;text-align:center;'>Password and Confirm password should be same</h4>";  
  }
  else
  {
    $sql=mysqli_query($con,"select * from create_account where email='$eid'");
    if(mysqli_num_rows($sql)) {
      $sql="update create_account set password='$pass' where email='$eid'";
      if(mysqli_query($con,$sql)) {
        $msg= "<h1 style='color:green'>Password Reset Successfully</h1>";
        header('location:Login.php'); 
      }
    }
    else{
      $error= "<h4 style='color:red'>Invalid Email Address</h4>"; 
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gobooc</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/login.css"rel="stylesheet"/>
</head>
  <body>
    <div class="login">
      <div class="image">
        <img src="logo/logo.png" alt="gobooc.."/>
      </div>
      <?php echo @$error; ?>
      <?php echo @$msg; ?>
      <h1>Reset Password</h1>
      <p>Enter the email id associated with your account to recieve an email to reset your password</p>
      <form method="post"><br>
        <input type="email" name="eid" placeholder="Email id" required="required" autocomplete="off" />
        <input type="password" name="pass" placeholder="New Password" required="required" autocomplete="off" />
        <input type="password" name="rpass" placeholder="Confirm New Password" required="required" autocomplete="off" />
        <input type="submit" value="Submit" name="reset" class="btn" />
      </form>
      <a href="Login.php">
        <button class="cancelBtn">Cancel</button>
      </a>
    </div>
  </body>
</html>
