<?php

include 'DBconnection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manager Panel</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="Css/styles.css" />
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
   <li class='active'>
   <a href='Index.php'>Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
   <li><a href='googlemap.php'>Disaster Map&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
   <li><a href='Aboutus.php'>About us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
   <li><a href='Contact.php'>Contact Us &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
   <?php
   if (isset($_SESSION['id2'])){
           
           echo "<li><a href='manager.php'>Manager&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>";
        }
   ?>
   
    
</ul>
</div>
                
            </nav>
            <hr>

  <?php


     $postid = $_GET['postid'];
    $postquery ="SELECT * FROM pending_posts WHERE post_id='$postid' ";
    $postresult= mysqli_query($connection,$postquery);
    $postcount=mysqli_num_rows($postresult);

 

if($postrow=mysqli_fetch_array($postresult))
{

?>
   <table>
            <form method="post" action="">
        <tr>
          <th>Post ID</th>
          <td><input type="text" name="postid" value="<?php echo $postrow['post_id'];?>" /></td>
        </tr>
        <tr>
            <th>Report</th>
            <td><textarea name="post" rows="4" cols="50"><?php echo $postrow['body']; ?></textarea></td>
            
        </tr>
        <tr>
          <th>Threat Level</th>
          <td><select name="threat">
                    
                    <optgroup label="Level of Threat">
                    
                    <option >High</option>
                    <option >Medium</option>
                     <option>Low</option>

                  </select></td>
        </tr>
<?php        
}
?>
 
    <tr>
     <td><input type='submit' name='postedit' value='Update'/></td>
     <td><input type='submit' name='approve' value='Approve'/></td>
     <td><input type='submit' name='reject' value='Reject'/></td>
     <td><a href="manager.php">Go Back</a></td>
   </tr>
   </form>
 </table></center>
</div>

 <?php

//update pending post
if (isset($_POST['postedit']))
{
  $threat = $_POST['threat'];
  $postid = $_POST['postid'];
  $report = $_POST['post'];
  $editquery = "UPDATE pending_posts SET body ='$report', threat = '$threat' WHERE post_id='$postid'";
  $editresult= mysqli_query($connection,$editquery);


}

 //approve pending posts
       
       if (isset($_POST['approve'])) {
  $postid=$_POST['postid'];

  $appsql="INSERT INTO `approved_posts` (SELECT*FROM pending_posts WHERE post_id='$postid' ) ";

  $connection->query($appsql);
$del="DELETE FROM pending_posts WHERE post_id='$postid' ";

  $connection->query($del);

}

       

//reject pending posts
       if (isset($_POST['reject'])) {
         
         $postid = $_POST['postid'];
         $rejectquery = "SELECT*FROM pending_posts WHERE post_id='$postid' ";
         $rejectresult= mysqli_query($connection,$rejectquery);

         $delete="DELETE FROM pending_posts WHERE post_id='$postid'";
         $result= mysqli_query($connection,$delete);

       }

       


?>


</body>
</html>
