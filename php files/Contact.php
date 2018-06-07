<?php include 'DBconnection.php';
?>
<html>
    <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Contact Us </title>
	<link rel="stylesheet" type="text/css" href="Css/styles.css" />
    <link rel="stylesheet" type="text/css" href="Css/bootstrap.css" />
     <link rel="stylesheet" type="text/css" href="Css/Index.css" />
     <link rel="stylesheet" type="text/css" href="Css/Olderposts.css" />
    <link rel="stylesheet" type="text/css" href="Css/Previous_Disaster.css" />
    <link rel="stylesheet" type="text/css" href="Css/Conatct.css" />
        <script src="Jss/Contact.js" type="text/javascript"></script>
             
  
    <style>
        body{background-image: url("669e5afad4adbcdc66af89ed7f3f6240.jpg");
            background-repeat: repeat;
            
        }
      
      </style>  
  </head>
     <body>
	 
     	<div id="wrapper2">
		
     		<div id="banner">
     			<image src="Images/WEB baner.jpg" height="200px" width="1100px"/>
     		</div>

     		<nav id="navigation">
     			<div id='cssmenu'>
<ul>
  <li ><a href='Index.php'>Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
   <li><a href='googlemap.php'>Disaster Map&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
   <li><a href='Aboutus.php'>About us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
   <li class='active'><a href='Contact.php'>Contact Us &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
   <?php

       if (isset($_SESSION['id1'])){
           
           echo "<li><a href='admin.php'>Admin  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>";
        }
        if (isset($_SESSION['id2'])){
           
           echo "<li><a href='manager.php'>Manager&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>";
        }
        if (isset($_SESSION['id'])){
              
                echo "<div><tr><td><strong><a  href='loggedin.php'; style='color: blue'>My Profile <img src='Images/Microsoft_Account.svg'></a></strong></td></tr></div>";
             
             }
     ?>
</ul>
</div>
     			
     		</nav>
            
    <br>
            <br>
    <style>
       #map {
        height: 350px;
        width: 400px;
        margin: 0px 0px; 
       }
        #map1{
            
            height: 350px;
            width: 800px;
            border: 2px solid lightblue;
            margin: 0px auto;
            
        }
        #text{
            
            float:right;
            margin: 10px;
        }
        #address{
            text-align: center;
            float: right;
            
        }
        #h5{
            color: blue;
        }
    </style>
 
 
    <div id="map1">   
        <div id= text>
            <h5 id ="H5">ICADS Disaster Management System</h5>
            <hr>
            <h7 id="address">Naional Institute of Business Mangement<br>Pitipana<br>Homagama<br>P.O 1245<br><br>icadsteam@icads.com
            <br><br>011-2456789<br>
            07712345678<br><br><a href="#">ICADSteamSL.com</a></h7>
            
        </div>
    <div id="map"></div>
    </div>
      <script>
      function initMap() {
        var uluru = {lat: 6.820977,  lng: 80.04079};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMDBoZ6m4ntG6ZgtrAG_i9GK_BOtFpxsw&callback=initMap">
    </script>
     
         </div>
            </body>
            </html> 
