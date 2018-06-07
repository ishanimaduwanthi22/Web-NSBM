<?php
/*if(isset($_POST['approvepost']))
{
        if(isset($_POST['check']))
        {
                    foreach ($_POST['check'] as $value1){
                        echo $value1;
                        $sql1 = "INSERT INTO approved_posts ('post_id','user_id','body','posted') SELECT 'post_id','user_id','body','posted' FROM pending_posts WHERE post_id= '$value1'; 
                          
                          DELETE FROM pending_posts where post_id = '$value1';
                        COMMIT;"; 

                        mysqli_query($connection,$sql1) or die (mysqli_error());

                    }
        }
}*/

?>        

<!DOCTYPE html>
<html>
<head>
    <title>Approved</title>
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
<link rel="stylesheet" type="text/css" href="Css/Signin.css" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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
   <li class='active'><a href='Admin.php'>Admin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
   </ul>
</div>
                
            </nav>

            <?php
            
            $message1 = '<div class="my-notify-success"><h1 align="center">You have successfully approved a new user</h1></div>';
            

             ?>

<a href="admin.php"><button type="button" class="btn btn-info btn-sm">Back to the Previous Page</button></a>

             <?php
include_once 'DBconnection.php';
if(isset($_POST['approve']))
{
        if(isset($_POST['check']))
        {
                    
                    foreach ($_POST['check'] as $value){
                        
                        $sql = "UPDATE users SET is_approved ='1' WHERE user_id = '$value'"; 
                        echo $message1;
                        mysqli_query($connection,$sql) or die (mysqli_error());

                    }
        }
}
?>
            


</body>
</html>
