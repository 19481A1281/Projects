<?php
 //Reading Values from form
$name =$_POST['name'];
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

$sql = "INSERT INTO mp.userinfo VALUES ".
 "('$name','$email','$password')";
 if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
}
else
{
echo "Error: " . $sql . "<br>" . $conn->error;
}


 $conn->close();
?>