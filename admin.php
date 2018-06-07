<?php

include 'DBconnection.php';
if (!isset($_SESSION['id1'])) {
  $loginstatus="LoggedIn";
   header("Location:Index.php");
}





?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
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
   <!--<li class='active'><a href='Admin.php'>Admin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>-->
   <?php

       if (isset($_SESSION['id1'])){
           
           echo "<li><a href='admin.php'>Admin  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>";
        }
     ?>
  
   
    
</ul>
</div>
     			
     		</nav>


            <form name="logout" method="post">
     		<button class="btn btn-primary"  name="logout" style="margin-left: 1010px">Logout</button>
     	</form>
      <hr>
      <form name="create" method="post" action="AddAccount.php" >
       <a href="AddAccount.php" class="btn btn-info btn-lg" style="background-color:  #4CAF50" style="border: none">
          <span class="glyphicon glyphicon-plus-sign" ></span> Create New Account
        </a>
      </form>
      <br>
      
     	<h1>Welcome to Admin Page!</h1>
      
<h4>New User Registrations</h4>
<?php

//admin approval for new user registrations

$query = "SELECT * FROM users WHERE is_approved='0'";

$result=mysqli_query($connection,$query);
$count=mysqli_num_rows($result);

$i = 1; //counter for the checkboxes so that each has a unique name
echo "<form action='process.php' method='post'>"; //form started here
echo "<table id='style'>
<tr>
<th>Id</th>
<th>First Name</th>
<th>Last Name</th>
<th>NIC</th>
<th>Telephone Number</th>
<th>Job Role </th>
<th>Email</th>
<th> Address Line 1 </th>
<th> Address Line 2 </th>
<th> Address Line 3 </th>
<th>Date of Birth </th>
<th>Password</th>
<th> Approve </th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['user_id'] . "</td>";
  echo "<td>" . $row['fName'] . "</td>";
  echo "<td>" . $row['lName'] . "</td>";
  echo "<td>" . $row['NIC'] . "</td>";
  echo "<td>" . $row['TelNo'] . "</td>";
  echo "<td>" . $row['privilege'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['address1'] . "</td>";
  echo "<td>" . $row['address2'] . "</td>";
  echo "<td>" . $row['address3'] . "</td>";
  echo "<td>" . $row['dob'] . "</td>";
  
  echo "<td>"."<div style='width:30px;overflow:hidden'>" . $row['password'] ."</div>"."</td>";
  



  echo "<td><input type='checkbox' name='check[$i]' value='".$row['user_id']."'/>";   
  echo "</tr>";
  $i++;
  }
echo "</table>";
echo "</br>";
echo "<input type='submit' class='btn btn-primary' name='approve' value='approve'/>";
echo "</form>";

//mysqli_close($connection);


?>
<hr>
<h4>Current Approved Users</h4>
<table id='style'>
    	<tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>NIC</th>
            <th>Telephone Number</th>
            <th>Job Role </th>
            <th>Email</th>
            <th> Address Line 1 </th>
            <th> Address Line 2 </th>
            <th> Address Line 3 </th>
            <th>Date of Birth </th>
            <th>Password</th>
            <th>Option</th>
    	</tr>
        <?php
			//include "DBconnection.php";
			$query1 = "SELECT * FROM users WHERE is_approved='1' ";
			$result1 = mysqli_query($connection,$query1);
			$count1=mysqli_num_rows($result1);
			while($row1=mysqli_fetch_array($result1))
			{
		?>
        <tr>
        	<td><?php echo $row1['user_id']; ?></td>
            <td><?php echo $row1['fName']; ?></td>
            <td><?php echo $row1['lName']; ?></td>
            <td><?php echo $row1['NIC']; ?></td>
            <td><?php echo $row1['TelNo']; ?></td>
            <td><?php echo $row1['privilege']; ?></td>
            <td><?php echo $row1['email'] ; ?></td>
            <td><?php echo $row1['address1']; ?></td>
            <td><?php echo $row1['address2']; ?></td>
            <td><?php echo $row1['address3']; ?></td>
            <td><?php echo $row1['dob']; ?></td>
            <td><div style="width:30px;overflow:hidden"><?php echo $row1['password']; ?></div></td>
            <td align="center"><a href="DeleteForm.php? uname=<?php echo $row1['user_id'];?>">Delete</a> / <a href="EditForm.php? uname=<?php echo $row1['user_id'];?>">Edit</a> </td>    
        </tr>
        
        <?php
			}
		?>
		
    </table>


<hr>
 






</body>
</html>