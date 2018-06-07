<?php 
   include 'DBconnection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Account</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

       if (isset($_SESSION['id1'])){
           
           echo "<li><a href='admin.php'>Admin  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>";
        }
     ?>
   
    
</ul>
</div>
                
            </nav>
<h1 style="font-family: Verdana" align="center">Create Account</h1>
       <?php 
          
           $message = '<h3 align="center" style="color:red">Sorry, Please Input Data</h3>';

        ?>
<hr>
       

		<table class="table table-responsive" id='style'>
        	<form method="post" action="">

            	<tr>
                
                
                
                	<th>ID:</th>
                    <td><input type="text" name="uname" /></td>
                </tr>
                
                <tr>
                	<th>First Name:</th>
                    <td><input type="text" name="fname" placeholder="Type First Name"  /></td>
                </tr>
                <tr>
                    <th>Last Name:</th>
                    <td><input type="text" name="lname" placeholder="Type Last Name"  /></td>
                </tr>
                <tr>
                    <th>NIC:</th>
                    <td><input type="text" name="nic" placeholder="Type NIC No"  /></td>
                </tr>
                <tr>
                    <th>Telephone Number:</th>
                    <td><input type="text" name="telno" placeholder="Type Tell No"  /></td>
                </tr>
                <tr>
                    <th>Job Role:</th>
                    <td><input type="text" name="prv" placeholder="Manager/Reporter"  /></td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td><input type="text" name="mail" placeholder="Type Email Address"  /></td>
                </tr>
                <tr>
                    <th>Address Line 1:</th>
                    <td><textarea cols="19px" rows="3" name="add1" placeholder="Type Your Address"  /></textarea></td>
                </tr>
                <tr>
                    <th>Address Line 2:</th>
                    <td><textarea cols="19px" rows="3" name="add2" placeholder="Type Your Address"  /></textarea></td>
                </tr>
                <tr>
                    <th>Address Line 3:</th>
                    <td><textarea cols="19px" rows="3" name="add3" placeholder="Type Your Address"  /></textarea></td>
                </tr>
                <tr>
                	<th>Date of Birth:</th>
                    <td>
                        <select name="txtyear">
                            <option>Year</option>
                                <?php
                                //While Loop
                                    $y=2021;
                                    while($y>=1950){
                                        $y--;
                                        echo "<option>".$y."</option>";
                                    }
                                ?>
                        </select>
                    	
                        <select name="txtmonth">
                        	<option>Month</option>
                            	<?php
									//For Loop									
								$m=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
								for($i=0;$i<count($m);$i++){
								echo"<option>".$m[$i]."</option>";	
								}
								?>

                        </select>
                        <select name="txtday">
                            <option>Day</option>
                                <?php
                                    //Do Loop while
                                    $d=0;
                                    do{
                                        $d++;
                                        echo "<option>".$d."</option>";
                                    }while($d<=30);
                                ?>
                        </select>
                        
                    </td>
                </tr>
                <tr>
                    <th>Password:</th>
                    <td><input type="text" name="psw" placeholder="Type Password"  /></td>
                </tr>
                <tr>
                    <th>Admin Approval:</th>
                    <td><input type='checkbox' name='adminapproval'  checked="IsChecked()"></td>
                </tr>
                <tr>
                    <td><input type="submit" class="btn btn-success" name="add" value="Add" /></td>
                    <td><input type="reset" class="btn" name="reset" value="Clear"/></td>
                </tr>
                
        	</form>
        </table>
  
 <?php

/*function IsChecked($chkname,$value)
    {

        if(!empty($_POST[$chkname]))

        {

            foreach($_POST[$chkname] as $chkval)

            {

                if($chkval == $value)

                {

                  return true;

                }

            }

        }

        return false;

    }
        
        if(IsChecked('adminapproval','B'))
        {
            $ql = "INSERT INTO users ('is_approved') VALUES ('1')";
        }*/

?>
        <?php   
        
        if (isset($_POST['add']))
        {
        
        

        $id = $_POST['uname'];
        $fname = trim($_POST['fname']);
        $lname = trim($_POST['lname']);
        $nic = $_POST["nic"];
        $tno = $_POST["telno"];
        $privilege = $_POST["prv"];
        $email = $_POST["mail"];
        $add1 = $_POST["add1"];
        $add2 = $_POST["add2"];
        $add3 = $_POST["add3"];
        $dob = trim($_POST['txtday']."/".$_POST['txtmonth']."/".$_POST['txtyear']);
        $pwd=$_POST["psw"];
        

        if(isset($_POST['add'])){
        if(empty($id) || empty($fname) || empty($lname) || empty($nic) || empty($tno) || empty($privilege) || empty($email) || empty($add1) || empty($add2) || empty($add3) || $_POST['txtyear']=="Year" || $_POST['txtmonth']=="Month" || $_POST['txtday']=="Day" || empty($pwd))
        {
            echo $message;
            
        }else{
       
        $query= "INSERT INTO `users`(`user_id`, `fName`, `lName`, `NIC`, `TelNo`, `privilege`, `email`, `address1`, `address2`, `address3`, `dob`, `password`) VALUES ('$id','$fname','$lname','$nic','$tno','$privilege','$email','$add1','$add2','$add3','$dob', md5('$pwd'));

        

        UPDATE users SET is_approved ='1' WHERE user_id = '$id'"; 
        $result = mysqli_query($connection,$query);
        $result;  
           
        
        }
        
    }
}


?>
</div>
</body>
</html>
