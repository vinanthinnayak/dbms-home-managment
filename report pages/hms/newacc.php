<?php
session_start();
$a=$_POST{'uname'};
$b=$_POST{'psw'};
$c=$_POST{'fname'};
$d=$_POST{'age'};
$e=$_POST{'email'};
$f=$_POST{'uid'};
$servername ="localhost";
$username ="root";
$password ="";
$dbname="hms";
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die ("Connection Failed!".$conn->connect_error);
}
echo "Connected Susseccfully!";
$sql="INSERT INTO `userdata`(`uname`, `pwd`, `fullname`, `age`, `email`, `uid`) VALUES ('$a','$b','$c','$d','$e','$f') ";
$result=$conn->query($sql);
if($result)
{
	echo ("<script> alert('Account succesfully created!');window.location='log.php';</script>");
}
else
{
	echo ("<script> alert('error! mysql_error()');window.location='newusr.php';</script>");
}
