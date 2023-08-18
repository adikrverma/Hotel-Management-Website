<?php 
include('Menu Bar.php');
include('connection.php');
extract($_REQUEST);
if($eid=="") {
  header('location:Login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gobooc</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/confirmation.css"rel="stylesheet"/>
</head>
<body style="margin-top:50px;">
  <?php
  include('Menu Bar.php');
  ?>
  <div class="confirmation">
    <div class="image">
      <img src="image/clipart/booking.png" alt="booking" />
    </div>
    <div class="successMessage">
      <h3>Congratulations, You have successfully booked a room</h3>
    </div>
    <a href="order.php">
        <button class="viewbtn">View</button>
    </a>
  </div>
  <?php
  include('Footer.php')
  ?>
</body>
</html>