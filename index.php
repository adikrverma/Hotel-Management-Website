<?php 
session_start();
error_reporting(1);
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gobooc</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script>!function(e,t,a){var c=e.head||e.getElementsByTagName("head")[0],n=e.createElement("script");n.async=!0,n.defer=!0, n.type="text/javascript",n.src=t+"/static/js/widget.js?config="+JSON.stringify(a),c.appendChild(n)}(document,"https://app.engati.com",{bot_key:"17650a668f5b4dd5",welcome_msg:true,branding_key:"default",server:"https://app.engati.com",e:"p" });</script>
  <link href="css/style.css"rel="stylesheet"/>
</head>
<body style="margin-top:50px;">
  <?php
    include('Menu Bar.php')
  ?>
<div class="carousel">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img src="image/slider/hotel1.jpg" alt="hotel1" />
      </div>
      <div class="item">
        <img src="image/slider/hotel2.jpg" alt="hotel2" />
      </div>
      <div class="item">
        <img src="image/slider/hotel3.jpg" alt="hotel3" />
      </div>
      <div class="item">
        <img src="image/slider/hotel4.jpg" alt="hotel3" />
      </div>
      <div class="item">
        <img src="image/slider/hotel5.jpg" alt="hotel3" />
      </div>
      <div class="item">
        <img src="image/slider/hotel6.jpg" alt="hotel3" />
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
</div>

<div class="rooms">
  <div class="card">
    <a href="Booking Form.php">
      <div class="image">
        <img src="image/rooms/room.jpg" alt="deluxe" />
      </div>
      <div class="roomText">
        <p><b>Deluxe Room</b></p>
      </div>
      <div class="roomDescription">
        <p>Deluxe room is well furnished with attached swimming pool. The floor is covered with carpet and most suitable for small families.</p>
      </div>
    </a>
  </div>
  <div class="card">
    <a href="Booking Form.php">
      <div class="image">
        <img src="image/rooms/room2.jpg" alt="deluxe" />
      </div>
      <div class="roomText">
        <p><b>Luxury Suite</b></p>
      </div>
      <div class="roomDescription">
        <p>Engulf yourself in the plush luxury of our premier rooms. An upgraded version of the Suite room, these rooms offer an elegant design with larger room space.</p>
      </div>
    </a>
  </div>
  <div class="card">
    <a href="Booking Form.php">
      <div class="image">
        <img src="image/rooms/room1.jpg" alt="deluxe" />
      </div>
      <div class="roomText">
        <p><b>Standard Room</b></p>
      </div>
      <div class="roomDescription">
        <p>Simple design king bedded room are well equipped with modern amenities.</p>
      </div>
    </a>
  </div>
  <div class="card">
    <a href="Booking Form.php">
      <div class="image">
        <img src="image/rooms/room3.jpg" alt="deluxe" />
      </div>
      <div class="roomText">
        <p><b>Suite</b></p>
      </div>
      <div class="roomDescription">
        <p>Enjoy the view of Anand from attach sitting area, An upgraded version of the Deluxe room, these rooms offer an elegant design with larger room space.</p>
      </div>
    </a>
  </div>
  <div class="card">
    <a href="Booking Form.php">
      <div class="image">
        <img src="image/rooms/room4.jpg" alt="deluxe" />
      </div>
      <div class="roomText">
        <p><b>Twin Deluxe Room</b></p>
      </div>
      <div class="roomDescription">
        <p>The Contemporary yet simple designed twin bedded rooms are well equipped with modern amenities. Fresh Decor and refined ambiance.</p>
      </div>
    </a>
  </div>
  <div class="card">
    <a href="Booking Form.php">
      <div class="image">
        <img src="image/rooms/room5.jpg" alt="deluxe" />
      </div>
      <div class="roomText">
        <p><b>Studio</b></p>
      </div>
      <div class="roomDescription">
        <p>They are twin adjacent rooms: A living room with sofa, coffee table and chairs, and a bedroom. It is also equipped with a small kitchen and a dining area.</p>
      </div>
    </a>
  </div>
</div>
<?php
  include('Footer.php')
?>
</body>
</html>