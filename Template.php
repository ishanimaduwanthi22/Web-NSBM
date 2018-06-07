<?php include 'DBconnection.php';
 $SESSION['id'] = '';     
   
?>
<!DOCTYPE html>
<html>
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Home </title>
	<link rel="stylesheet" type="text/css" href="Css/styles.css" />
    <link rel="stylesheet" type="text/css" href="Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="Css/Index.css" />
    <link rel="stylesheet" type="text/css" href="Css/Olderposts.css" />
    <link rel="stylesheet" type="text/css" href="Css/Signin.css" />
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
   <li class='active'><a href='Index.php'>Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
   <li><a href='googlemap.php'>Disaster Map&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
   <li><a href='Aboutus.php'>About us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
   <li><a href='Contact.php'>Contact Us &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
   <?php

       if (isset($_SESSION['id1'])){
           
           echo "<li><a href='admin.php'>Admin  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>";
        }
        if (isset($_SESSION['id2'])){
           
           echo "<li><a href='manager.php'>Manager&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>";
        }
     ?>

    
    
   
    
</ul>

</div>
     			
     		</nav>

    
       


       <div id="content_area">
          <?php
           $sql = "SELECT * FROM approved_posts ORDER BY post_id ASC LIMIT 1, 1";
           
           if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
           $start_from = ($page-1) * $results_per_page;
           $sql = "SELECT * FROM approved_posts ORDER BY post_id ASC LIMIT $start_from, ".$results_per_page." ";
           //$rs_result = $connection->query($sql); 
           $get=$connection->query($sql);


          ?>

          <label>Reported By:</label>    

          <?php
             while($array=mysqli_fetch_array($get)) {
          ?>

            <label><strong><?php echo $array['reporter']; ?></strong></label><a  href="googlemap.php"><button style="margin-left: 500px" type="button" class="btn btn-danger active">Go To the Map</button></a><br><br>
            <h5><?php echo $array['title']; ?></h5>
            <label><?php echo $array['body']; ?></label>
            

             <?php
             }
             ?>
<br>


<br>

        

<?php 
$sql = "SELECT COUNT(post_id) AS total FROM approved_posts";
$result = $connection->query($sql);
$row = $result->fetch_assoc();
$total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results
  
for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
            echo "<a href='Index.php?page=".$i."'";
            if ($i==$page)  echo " class='curPage'";
            echo ">".$i."</a> "; 
}; 
?>



     </div>

     		
   
              

              


     		
            
           

           <div id="sidebar">
             
          
               <?php
                if (isset($_SESSION['id'])){
              
                
                  
                  
              echo "<div><tr><td><strong><a  href='loggedin.php'; style='color: blue'>My Profile <img src='Images/Microsoft_Account.svg'></a></strong></td></tr><hr></div>";
             
             }
             ?>
               
          <tr align="right" ><button class="btn btn-primary" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign in</button></tr>
               &nbsp;&nbsp;

               
               <tr><a href="Signup.php"><button type="button" class="btn btn-primary">Sign up</button></a></tr>
               <br>
               <br>
         
             
                <div class="sidebar-module">
            <h4 style="color: blue;">Archives</h4>
			<hr>
            <ol class="list-unstyled">
              <li><a href="#">March 2017</a></li>
              <li><a href="#">February 2017</a></li>
              <li><a href="#">January 2017</a></li>
              <li><a href="#">December 2017</a></li>
              <li><a href="#">November 2017</a></li>
              <li><a href="#">October 2017</a></li>
              <li><a href="#">September 2017</a></li>
              <li><a href="#">August 2017</a></li>
              <li><a href="#">July 2017</a></li>
              <li><a href="#">June 2017</a></li>
              <li><a href="#">May 2017</a></li>
              <li><a href="#">April 2017</a></li>
            </ol>
          </div>

          </div>
        
  



<div id="id01" class="modal">
  
  <form class="modal-content animate" method="POST" >
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="Avatar.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">

      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" name="login" class="a">Login</button><span> <?echo $error; ?></span>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

  
             
        <footer>
     			
     			<p>All Rights Reserved</p>
        </footer>
          

          

     	

     </body> 
  </div>

</html>