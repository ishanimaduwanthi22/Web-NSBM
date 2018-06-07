<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "icads_web";
$error='';
$results_per_page = 1;
//$admin=0;
//$mgr=0;



// Create connection
$connection = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 

//function to escape any potential harmfull information
if (isset($_POST['delete'])) {
    

      $id=$_POST["uname"];        
        //include 'DBconnection.php';
        $delete="DELETE  FROM users WHERE user_id='$id' ";
      $connection->query($delete);
        
    }





function escape_data($data)
{
	if (function_exists('mysqli_real_escape_string')) //if the function exist bring the mysqli real escape string.
	//escapes characters that could be used for sql injections(people trying to run sql scripts on your database.)
	{
		global $connection;
		$data = mysqli_real_escape_string(trim($data),$connection);
		$data = strip_tags($data); //strip out any HTML tags that somebody trying to put in to input tags.
	}
	else
	{
		$data = mysqli_real_escape_string(trim($data),$connection);
		$data = strip_tags($data);
	}

	return $data;
}

//echo "Connected successfully";

//User_login

if (isset($_POST['login'])) {


	

$uname=$_POST["uname"];
$pwd=md5($_POST["psw"]);
$sql="SELECT* FROM users WHERE  user_id='$uname' AND password='$pwd' AND is_approved = '1' ";	
$loginresult=mysqli_query($connection,$sql);
$count=mysqli_num_rows($loginresult);
$row=mysqli_fetch_array($loginresult);

if($count==1){
	echo $_SESSION["id"]=$row["user_id"];
	header("Location:loggedin.php");



}else{echo "ss";}

}

//Admin_login

if(isset($_POST['login'])){
    
    
    echo $adminid = $_POST["uname"];
	$adminpassword = md5($_POST["psw"]);
	
	$adminsql="SELECT* FROM admin WHERE admin_id='$adminid' and admin_password='$adminpassword' ";
    
    $adminloginresult=mysqli_query($connection,$adminsql);
    $count=mysqli_num_rows($adminloginresult);
    $row=mysqli_fetch_array($adminloginresult);


    if($count==1){
    echo $_SESSION["id1"]=$row["admin_id"];
	//echo $_SESSION["id"]=1;
	//$admin=1;
	header("Location:admin.php");



}else{echo "ss";}

}

//Manager_login

if(isset($_POST['login'])){
    
    
     $mgrid = $_POST["uname"];
	 $mgrpassword = md5($_POST["psw"]);
	
	 $mgrsql="SELECT* FROM manager WHERE mgr_id='$mgrid' and mgr_psw='$mgrpassword' ";
    
    $mgrloginresult=mysqli_query($connection,$mgrsql);
    $mgrcount=mysqli_num_rows($mgrloginresult);
    $mgrrow=mysqli_fetch_array($mgrloginresult);


    if($mgrcount==1){
     $_SESSION["id2"]=$mgrrow["mgr_id"];
	//echo $_SESSION["id"]=1;
	//$mgr=1;
	header("Location:manager.php");



}else{echo "ss";}

}



//logout code
if (isset($_POST["logout"])) {

	session_destroy();
	header("Location:Index.php");



}

//signup code

if (isset($_POST['signup'])) {
	
if (preg_match('%^[A-Za-z\.\'\-]{2,15}$%', stripslashes(trim($_POST['fname'])))) 
{
	$fname = escape_data($_POST['fname']);
}
else
{
	$fname = FALSE;
	$fnametxt = "Please enter a valid First Name";
	echo '<p><font color="red">Please enter a valid First Name</font></p>';
}

if (preg_match('%^[A-Za-z\.\'\-]{2,15}$%', stripslashes(trim($_POST['lname'])))) 
{
	$lname = escape_data($_POST['lname']);
}
else
{
	$lname = FALSE;
	$lnametxt = "Please enter a valid Last Name";
	echo '<p><font color="red">Please enter a valid Last Name</font></p>';
}

if (preg_match('%^[A-Za-z0-9._-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$%', stripslashes(trim($_POST['mail'])))) 
{
	$email = escape_data($_POST['mail']);

}
else
{
	$email = FALSE;
	$emailtxt = "Please enter a valid Email Address";
	echo '<p><font color="red">Please enter a valid Email Address</font></p>';
}

if (preg_match('%\(?[0-9]{3}\)?-?[0-9]{3}[-. ]?[0-9]{4}%', stripslashes(trim($_POST['tno'])))) 
{
	$tno = escape_data($_POST['tno']);
}
else
{
	$tno = FALSE;
	$tnotxt = "Please enter a valid Telephone No";
	echo '<p><font color="red">Please enter a valid Telephone No</font></p>';
}

if (preg_match('%^(?=[-_a-zA-Z0-9]*?[A-Z])(?=[-_a-zA-Z0-9]*?[a-z])(?=[-_a-zA-Z0-9]*?[0-9])\S{6,}$%', stripslashes(trim($_POST['password'])))) 
{
	$pwd = escape_data($_POST['password']);
}
else
{
	$pwd = FALSE;
	$pwdtxt = "Please enter a valid Password";
	echo '<p><font color="red">Please enter a valid Password</font></p>';
}

 $id = $_POST["Sid"];
 $fname = $_POST["fname"];
$lname = $_POST["lname"];
$nic = $_POST["nic"];
$tno = $_POST["tno"];
$privilege = $_POST["job"];
$email = $_POST["mail"];
$add1 = $_POST["add1"];
$add2 = $_POST["add2"];
$add3 = $_POST["add3"];
$dob = $_POST["dob"];
$pwd=$_POST["password"];

$sql= "INSERT INTO `users`(`user_id`, `fName`, `lName`, `NIC`, `TelNo`, `privilege`, `email`, `address1`, `address2`, `address3`, `dob`, `password`) VALUES ('$id','$fname','$lname','$nic','$tno','$privilege','$email','$add1','$add2','$add3','$dob','$pwd')";

$result = mysqli_query($connection, $sql);
if ($result) {
	
	echo "You are registered successfully.";
	header("Location:index.php");
}

	

}
else{



			$error="fill all the details:";
		}




?>







