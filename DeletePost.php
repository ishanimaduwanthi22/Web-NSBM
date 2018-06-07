<!DOCTYPE html>
<html>
<head>
	<title>Delete Posts</title>
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
   
   
    
</ul>
</div>
                
            </nav>
<hr>

<?php


    $postid = $_GET['postid'];
    include 'DBconnection.php';
    $postquery ="SELECT * FROM pending_posts WHERE post_id= '$postid' ";
    $postresult= mysqli_query($connection,$postquery);
    $postcount=mysqli_num_rows($postresult); 
    if($postrow=mysqli_fetch_array($postresult))
    {

?>
   <table>
            <form method="post" action="">
        <tr>
          <th>Post ID</th>
          <td><input type="text" name="postid" value="<?php echo $postrow['post_id']; ?>" /></td>
        </tr>
        <tr>
            <th>Report</th>
            <td><label><?php echo $postrow['body']; ?></label></td>
            <!--<td><input type="text" name="post" value="<?php //echo $postrow['body']; ?>" /></td>-->
        </tr>

<?php        
}
?>
 
    <tr>
     <td colspan="2" align="center">
      <input type='submit' name='postdelete' value='Delete' onclick="Location:'admin.php'"/>
      <a href="manager.php">Back</a>
    </td>
   </tr>
   </form>
 </table></center>

</div>

 <?php
if (isset($_POST['postdelete']))
{
  $postid = $_POST['post_id'];
  $postquery = "DELETE*FROM pending_posts WHERE post_id=$postid";
$postresult= mysqli_query($connection,$postquery);
$postresult;
header("Location:manager.php");


}
?>
</div>
</body>
</html>