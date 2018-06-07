<?php 
include 'DBconnection.php';
$loginstatus='';

if (!isset($_SESSION['id'])) {
  $loginstatus="LoggedIn";
   header("Location:Index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>LoggedIn</title>
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
   <li><a href='Contact.php'>Contact Us &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
   <li class='active'><a href='loggedin.php'>Reporter &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
   
    
</ul>

</div>
     			
     		</nav>
      
       
    

    <div id="login">
    <a  href="login.php"><?

    echo $loginstatus;

    ?></a>
            <form name="logout" method="post">
      
        
     	<button class="btn btn-primary"  name="logout" style="margin-left: 1010px">Logout</button>
        
    
     	</form>
      
      
     	<!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">
               
          <h2 align="center">My Profile</h2><br>
          <h4>Submit Your Report Here:</h4>
          
          <hr>
        <table class="table table-secondary" > 

        <form method="POST"><tbody >
          <!-- Post Content -->
          <tr>
            <td>
          <div class="card my-4">
            <div class="card-header">

                 <label for="inputTopic">Topic:</label>
                  <input type="text" class="form-control" id="inputHeadline" name="topic" placeholder="Enter Topic">
                </div>
              </div>
          <!--<h5 class="card-header">Report:</h5>-->
          <div class="card-body">
          <!--<form method="post" enctype="multipart/form-data">-->
          <div class="form-group">
            <label for="inputAddress">Reported by:</label>
                  <input type="text" class="form-control" id="inputID" name="reporter" placeholder="Enter your Full Name">
          <!--<textarea class="form-control" name="status" placeholder="Write Here" required></textarea>-->
          </div>
        </div>
        <label for="inputDescription">Description</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body"></textarea>
                </div>
                <h5>Location:</h5>

                 <input id="inputsearch" class="controls" type="text" placeholder="Select the location here:" name="location">
                 <br><br>

                 <h5>
                    
                   Threat Level </h5>
                    
                   <select name="threat">*
                    
                    <optgroup label="Level of Threat">
                    
                    <option >High</option>
                    <option >Medium</option>
                     <option>Low</option>

                  </select>

                  


                 <script type="text/javascript">
                
                function placesearch(){
                  var input=document.getElementById('inputsearch');
                  var completeauto=new google.maps.places.Autocomplete(input);
                  }
              </script>

         <!-- <input type="file" src="no-image-icon-13.png" name="imageUpload" class="btTxt submit" id="imageUpload" />-->
          
               
          <!--<input class="home" style="background:url('no-image-icon-13.png')" type="file" name="imageUpload" id="imageUpload">-->
          <button style="margin-left: 300px" type="submit" name="post" class="btn btn-primary">Post</button>
          </td>
        </tr>
      </tbody>
    </table>
          </form>
          </div>
          </div>
          <hr>
          
          <div>
            
           
           
           <?php

           //post code

    if (isset($_POST['post'])) {
  
  //$postid = $_POST['postid'];
  //$userid =$_POST['userid'];
      $threat = $_POST['threat'];
  $topic=$_POST['topic'];
  $body=$_POST['body'];
  $loc=$_POST['location'];
  $reporter=$_POST['reporter'];
$sql = "INSERT INTO `pending_posts`( `title`, `body`, `location`, `reporter`, `threat` ) VALUES ('$topic','$body','$loc','$reporter', '$threat')";

$connection->query($sql);
//echo "done";

}
           ?>

         






          

   
        
              

       





        </div> 

     		<footer>
     			
     			<p>All Rights Reserved</p>
        </footer>

        <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
          
</body>
</html>