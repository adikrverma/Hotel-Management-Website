<?php 
include('Menu Bar.php');
include('connection.php');
extract($_REQUEST);
if($eid=="") {
  header('location:Login.php');
}
if(isset($savedata)) {
  $sql="insert into room_booking_details(name,email,phone,room_type,address,check_in_date,check_out_date,room_count,adult_count,children_count) 
  values('$name','$email','$phone','$room_type','$address','$checkin','$checkout','$room_count','$adults','$childrens')";
  if(mysqli_query($con,$sql)) {
    header('location:confirmation.php');
    $msg= "<div style='display:flex '><h2 style='color:blue'>You have Successfully booked this room</h2><h3><a href='order.php'>View </a></h3></div>"; 
  }
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
</head>
<body style="margin-top:50px;">
  <?php
  include('Menu Bar.php');
  ?>
<div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">
                    <div class="form-header">
                        <?php echo @$msg; ?> 
                        <h1>Make your reservation</h1>
                    </div>
                    <form method="post">
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="name" placeholder="Enter your Name">
                                    <span class="form-label">Name</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <input class="form-control" type="email" name="email" placeholder="Enter your Email">
                                    <span class="form-label">Email</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                    <input class="form-control" type="tel" name="phone" placeholder="Enter you Phone">
                                    <span class="form-label">Phone</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                    <select class="form-control" name="room_type" required>
                                        <option value="" selected hidden>Select room type:</option>
                                        <option>Deluxe Room</option>
                                        <option>Luxury Suite</option>
                                        <option>Standard Room</option>
                                        <option>Suite</option>
                                        <option>Twin Deluxe Room</option>
                                        <option>Studio</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                    <span class="form-label">Rooms</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="address" placeholder="Country, ZIP, city...">
                            <span class="form-label">Destination</span>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" name="checkin" type="date" required>
                                    <span class="form-label">Check In</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" name="checkout" type="date" required>
                                    <span class="form-label">Check out</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="form-control" name="room_count" required>
                                        <option value="" selected hidden>No of rooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                    <span class="form-label">Rooms</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="form-control" name="adults" required>
                                        <option value="" selected hidden>No of adults</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                    <span class="form-label">Adults</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="form-control" name="childrens" required>
                                        <option value="" selected hidden>no of children</option>
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                    <span class="form-label">Children</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-btn">
                          <input type="submit" value="Book Now" name="savedata" class="submit-btn" />
                          <!-- <button class="submit-btn" name="savedata">Book Now</button> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
<?php
include('Footer.php')
?>
</body>
</html>