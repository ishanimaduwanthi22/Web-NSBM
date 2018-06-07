<?php 
include 'DBconnection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Map</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" type="text/css" href="Css/styles.css" />
	<link rel="stylesheet" type="text/css" href="Css/loggedin.css" />
  <link rel="stylesheet" type="text/css" href="Css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="Css/Index.css" />
<link rel="stylesheet" type="text/css" href="Css/Olderposts.css" />
<link rel="stylesheet" type="text/css" href="Css/Previous_Disaster.css" />
<link rel="stylesheet" type="text/css" href="Css/Aboutus.css" />
     <!-- Bootstrap core CSS -->
    <link href="Css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Css/blog-post.css" rel="stylesheet">
       <style>
        body{
            background-image: url("669e5afad4adbcdc66af89ed7f3f6240.jpg");
        
            background-repeat: repeat;
            
        }
      
      </style>
</head>
<body>
<body>
  
      
  <div id="wrapper2">
		
     		<div id="banner">
     			<image src="Images/WEB baner.jpg" height="200px" width="1100px"/>
     		</div>
        
     		<nav id="navigation">
     			<div id='cssmenu'>
           
<ul>
   <li ><a href='Index.php'>Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
   <li class="active"><a href='googlemap.php'>Disaster Map&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
   <li><a href='Aboutus.php'>About us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
   <li><a href='Contact.php'>Contact Us &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
   
   
    
</ul>

</div>
     			
     		</nav>

     		<div >
	


  <style>
       #map {
        height:90vh;
        width:75vw;
        margin-left:50px; 
       }
    </style>
   <h3></h3>
    <div id="map"></div>



<script type="text/javascript">
     var geocoder;
  var map;
 
  function initMap() {
    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(6.927079,79.861244);
    var mapOptions = {
      zoom:12,
      center: latlng
    }
    map = new google.maps.Map(document.getElementById('map'), mapOptions);
<?php               
          $getlocation="SELECT * FROM approved_posts";
          $setloc=mysqli_query($connection,$getlocation);
          $count=mysqli_num_rows($setloc);
         
         
          while($array=mysqli_fetch_assoc($setloc)){
            
//geocoding the address,referanced js map api from developer.google.com
    echo "var address ="."'".$array['location']."'".";
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == 'OK') {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: map,
           
            position: results[0].geometry.location

            });

            marker.addListener('click', function()
            {
            	infowindow.open(map, marker);
            });

            var details='<table><tr><th>Title: </th><td>".$array['title']."</td></tr><tr><th>Threat: </th><td>".$array['threat']."</td></tr></table>';

            var infowindow = new google.maps.Infowindow({
              content:details
            });
        
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });";

     }?>
}

</script>



    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOGe28wpXNVND_dvCQBCeXdVpY3nEHaTg&callback=initMap">
    </script>



</div>


</body>
</html>
