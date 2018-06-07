<?php include 'DBconnection.php';
?>
<html>
    <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> About us </title>
	<link rel="stylesheet" type="text/css" href="Css/styles.css" />
    <link rel="stylesheet" type="text/css" href="Css/bootstrap.css" />
     <link rel="stylesheet" type="text/css" href="Css/Index.css" />
     <link rel="stylesheet" type="text/css" href="Css/Olderposts.css" />
    <link rel="stylesheet" type="text/css" href="Css/Previous_Disaster.css" />
         <link rel="stylesheet" type="text/css" href="Css/Aboutus.css" />
             
  
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
   <li class='active'><a href='Aboutus.php'>About us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
   <li><a href='Contact.php'>Contact Us &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
   <?php

       if (isset($_SESSION['id1'])){
           
           echo "<li><a href='admin.php'>Admin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>";
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
            
            <h2 align="Center" id="mission">  <strong>OUR MISSION</strong></h2>
            <h6 align="center">A mission statement defines in a paragraph or so any entity’s reason for existence. It embodies its philosophies, goals, ambitions and mores. Any entity that attempts to operate without a mission statement runs the risk of wandering through the world without having the ability to verify that it is on its intended course.

            It is our hope that the mission statements that we’ve collected from some of the world’s largest and smallest organizations and families will provide you with ideas and inspirations for defining your own mission statement.</h6>
            
            <br>
            <br>
            
            <div id="name1">
                   <div id="imgContain">
               
                <img src="Images/Ashan.jpg" alt="Avatar" Class="image1">
                       <h5 align="center"  class="Names">Ashan Vithnage</h5>
                       <br>
                       <h6 align="center">Love myself I do. Not everything, but I love the good as well as the bad. I love my crazy lifestyle, and I love my hard discipline. I love my freedom of speech and the way my eyes get dark when I'm tired. I love that I have learned to trust people with my heart, even if it will </h6>
            
                </div>
            
            </div>
              
            <div id="name2">
                <div id="imgContain">
                <img src="Images/Ishani.jpg" alt="Avatar" Class="image1"></div>
                <h5 align="center"  class="Names">Ishani Maduwanthi</h5>
                       <br>
                       <h6 align="center">Love myself I do. Not everything, but I love the good as well as the bad. I love my crazy lifestyle, and I love my hard discipline. I love my freedom of speech and the way my eyes get dark when I'm tired. I love that I have learned to trust people with my heart, even if it will </h6>
            </div>
             
             <div id="name3">
                <div id="imgContain">
                <img src="Images/Chathura.jpg" alt="Avatar" Class="image1"></div>
                 <h5 align="center"  class="Names">Chathura Madushanka</h5>
                       <br>
                       <h6 align="center">Love myself I do. Not everything, but I love the good as well as the bad. I love my crazy lifestyle, and I love my hard discipline. I love my freedom of speech and the way my eyes get dark when I'm tired. I love that I have learned to trust people with my heart, even if it will </h6>    
            </div>
             
            <div id="name4">
                <div id="imgContain">
                <img src="Images/Dulshan.jpg" alt="Avatar" Class="image1"></div>
                <h5 align="center"  class="Names">Dushan Dagallage</h5>
                       <br>
                       <h6 align="center">Love myself I do. Not everything, but I love the good as well as the bad. I love my crazy lifestyle, and I love my hard discipline. I love my freedom of speech and the way my eyes get dark when I'm tired. I love that I have learned to trust people with my heart, even if it will </h6>
            </div>
         
             <div id="name5">
                <div id="imgContain">
               <img src="Images/Sachintha.jpg" alt="Avatar" Class="image1"></div>
                <h5 align="center" class="Names">Sachintha Artigala</h5>
                       <br>
                       <h6 align="center">Love myself I do. Not everything, but I love the good as well as the bad. I love my crazy lifestyle, and I love my hard discipline. I love my freedom of speech and the way my eyes get dark when I'm tired. I love that I have learned to trust people with my heart, even if it will </h6>
            </div>
         </div>

         

    </body></html>