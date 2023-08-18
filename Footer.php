<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="keywords" content="footer, address, phone, icons" />
 <title>Gobooc</title>
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
 <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="css/footer.css">
</head>
    <body>
        <footer class="footer-distributed">
            <div class="footer-content">
                <div class="footer-left">
                    <h3>Gobooc</h3>
                    <p class="footer-links">
                        <a href="index.php">Home</a>
                        ·
                        <a href="about.php">About</a>
                        ·
                        <a href="gallery.php">Gallery</a>
                    </p>
                    <p class="footer-company-name">Gobooc &copy; 2022</p>
                </div>
                <div class="footer-center">  
                    <div id="map_container" style="width: 100%; height: 350px;"> </div>
        <script>
    function initialize_map() {
        var mapDiv = document.getElementById('map_container');
        var map = new google.maps.Map(mapDiv, {
            center: {lat: 28.7041, lng: 77.1025},
			zoom: 10
        });
        var marker = new google.maps.Marker({
	     position: new google.maps.LatLng(12.8629, 77.4387),
	     map: map
	 });
	 var address = '<div><p><b>Christ University</b></p></div>';
	 var infowindow = new google.maps.InfoWindow({
             content: address
         });
         marker.addListener('click', function() {
          infowindow.open(map, marker);
         });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUkZalw0w9eg9ieHz5L01x8j1L3bmFw8A&callback=initialize_map"></script>
                </div>
                <div class="footer-right">
                    <p class="footer-company-about">
                    <span>About the company</span>
                    Gobooc is an establishment that provides paid lodging on a short-term basis. Facilities provided may range from a modest-quality mattress in a small room to large suites.
                    </p>   
                    <div class="footer-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-github"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </body> 
</html>