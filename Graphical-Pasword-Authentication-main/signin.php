<?php
 //Reading Values from form
$email =$_POST['email'];
$password =$_POST['password'];

//Connecting to Mysql Using PHP
$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "root";
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
 if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$output=mysqli_query($conn,"select * from mp.userinfo where(email='$email') and (password='$password'));
if($output){
$nrows=mysqli_num_rows($output);
if($nrows)
header('Location:gecgudlavallerumic.in');
else
echo "Access denied";
}
else{
echo "Error:".mysqli_error($conn);
}


 $conn->close();
?>