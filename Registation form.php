<?php
include('connection.php');
extract($_REQUEST);
if(isset($save)) {
  $sql= mysqli_query($con,"select * from create_account where email='$email' ");
  if(mysqli_num_rows($sql)) {
    $msg= "<h1 style='color:red'>Email address already exists</h1>";    
  }
  else {
    $sql="insert into create_account(name,email,password,mobile,gender,country) 
    values('$name','$email','$pass','$mobile','$gender','$country')";
    if(mysqli_query($con,$sql))
    {
      $msg= "<h1 style='color:green'>Data Saved Successfully</h1>";
      header('location:Login.php'); 
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
  <link href="css/signup.css"rel="stylesheet"/>
</head>
  <body>
    <div class="signup">
      <div class="image">
        <img src="logo/logo.png" alt="gobooc.."/>
      </div>
      <h1>Create Your Account</h1>
      <div class="signin">
        <p>Already have an account?</p>
        <p><a href="Login.php">SIGN IN</a></p>
      </div>
      <?php echo @$msg; ?>
      <form method="post">
        <input type="text" name="name" placeholder="Name" required="required" />
        <input type="email" name="email" placeholder="Email id" required="required" autocomplete="off" />
        <input type="password" name="pass" placeholder="Password" required="required" autocomplete="off" />
        <input type="text" name="mobile" placeholder="Mobile Number" required>
        <select name="gender"  class="form-control" required>
          <option value="" disabled selected>Select Gender</option>
          <option>Male</option>
          <option>Female</option>
          <option>Other</option>
        </select>
        <select name="country"  class="form-control" required>
          <option value="" disabled selected>Select your Country</option>
          <option>India</option>
          <option>USA</option>
          <option>UK</option>
          <option>France</option>
          <option>Spain</option>
        </select>
        <input type="submit" value="SIGN UP" name="save" class="btn" />
      </form>
    </div>
</body>
</html>
