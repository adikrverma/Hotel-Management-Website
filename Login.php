<?php 
session_start();
error_reporting(1);
if($_SESSION['create_account_logged_in']!="") {
  header('location:Booking Form.php');
}
error_reporting(1);
require('connection.php');
extract($_REQUEST);
if(isset($login)) {
  $eid = $_POST['eid'];
  $recaptcha = $_POST['g-recaptcha-response'];
  $secret_key = '6Lf0OR8jAAAAAFW6LTettls9jzTeGSjFst8wuBaA';
  $url = 'https://www.google.com/recaptcha/api/siteverify?secret='
          . $secret_key . '&response=' . $recaptcha;
  
  $response = file_get_contents($url);
  $response = json_decode($response);

  if($eid=="" || $pass=="" || $recaptcha=="") {
    $error= "<h4 style='color:red;text-align:center;'>Please fill all details</h4>";  
  }
  else if($response->success) {
    $error= "<h4 style='color:red'>Recaptcha not verified</h4>"; 
  }
  else {
    $sql=mysqli_query($con,"select * from create_account where email='$eid' && password='$pass' ");
    if(mysqli_num_rows($sql)) {
      $_SESSION['create_account_logged_in']=$eid;  
      header('location:index.php'); 
    }
    else {
      $error= "<h4 style='color:red'>Invalid login details</h4>"; 
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
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
  <body>
    <div class="login">
      <div class="image">
        <img src="logo/logo.png" alt="gobooc.."/>
      </div>
      <h1>Login</h1>
      <div class="signup">
        <p>Don't have an account?</p>
        <p><a href="Registation form.php">SIGN UP</a></p>
      </div>
      <?php echo @$error; ?>
      <form method="post"><br>
        <input type="email" name="eid" placeholder="Email id" required="required" autocomplete="off" />
        <input type="password" name="pass" placeholder="Password" required="required" autocomplete="off" />
        <div class="g-recaptcha" data-sitekey="6Lf0OR8jAAAAAFW6LTettls9jzTeGSjFst8wuBaA">
        </div>
        <input type="submit" value="Let me in." name="login" class="btn" />
      </form>
      <div class="forgotPassword">
        <a href="forgot password.php">FORGOT PASSWORD?</a>
      </div>
    </div>
  </body>
</html>
