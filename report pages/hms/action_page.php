<?php
session_start();
$x=$_POST{'uname'};
$y=$_POST{'psw'};
$servername ="localhost";
$username ="root";
$password ="";
$dbname="hms";
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die ("Connection Failed!".$conn->connect_error);
}
echo "Connected Susseccfully!";
$sql="SELECT * FROM `userdata` WHERE uname = '$x' AND pwd ='$y' ";
$result=$conn->query($sql);
$check = mysqli_fetch_array($result);
if(isset($check)) {
	
	echo ("<script> alert('login successful!');window.location='hello.php';</script>");
	
	//header("Location: hello.php");
}
else {
	echo ("<script> alert('unsuccessful');window.location='log.php';</script>");
}
?>