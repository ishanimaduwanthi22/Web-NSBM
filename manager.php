<?php 
include 'DBconnection.php';
if (!isset($_SESSION['id2'])) {
  $loginstatus="LoggedIn";
   header("Location:Index.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Manager Page</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" type="text/css" href="Css/styles.css" />
	<link rel="stylesheet" type="text/css" href="Css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="Css/table.css" />
  <link rel="stylesheet" type="text/css" href="Css/Index.css" />
<link rel="stylesheet" type="text/css" href="Css/Olderposts.css" />
<link rel="stylesheet" type="text/css" href="Css/Previous_Disaster.css" />
<link rel="stylesheet" type="text/css" href="Css/Aboutus.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

     <!-- Bootstrap core CSS -->
    <!--<link href="Css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
    <!--<link href="Css/blog-post.css" rel="stylesheet">-->


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
   <li >
   <a href='Index.php'>Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
   <li><a href='googlemap.php'>Disaster Map&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
   <li><a href='Aboutus.php'>About us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
   <li><a href='Contact.php'>Contact Us &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
   <?php
   if (isset($_SESSION['id2'])){
           
           echo "<li class='active'><a href='manager.php'>Manager&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>";
        }
   ?>

  
   
    
</ul>
</div>
     			
     		</nav>


            <form name="logout" method="post">
     		<button class="btn btn-primary"  name="logout" style="margin-left: 1010px">Logout</button>
     	</form>
      <hr>

<h4>Pending Posts</h4>
    

        
       <form action='' method='post'>
       <table id='style'>
        <tr><th>Post ID</th>
          <th>User ID</th>
          <th>Topic</th>
          <th>Report</th>
          <th>Location</th>
          <th>Threat Level</th>
          <th>Approve</th>
        </tr>

        <?php
  
      $query1 = "SELECT * FROM pending_posts ";
      $result = mysqli_query($connection,$query1);
      $count1=mysqli_num_rows($result);
      
      while($row=mysqli_fetch_array($result))
      {

        $text = $row['body'];
        $max_char = 60;

    ?>

          
         
          <tr>
          <td><?php echo $row['post_id']; ?></td>
          <td><?php echo $row['user_id']; ?></td>
          <td><?php echo $row['title']; ?></td>
          <td><?php echo substr($text, 0, $max_char) . '...'; ?></td>
          <td><?php echo $row['location']; ?></td>
          <td><?php echo $row['threat']; ?></td>
          <td align="center"><a href="EditPost.php? postid=<?php echo $row['post_id'];?>">Edit/Approve</a> </td>
          </tr>
          
  <?php
  }
  ?>
   </table>
  
   
       
        
    
    </form>

</body>
</html>