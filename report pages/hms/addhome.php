<?php
session_start();
$a=$_POST{'dat'};
$b=$_POST{'appno'};
$c=$_POST{'aname'};
$d=$_POST{'comp'};
$e=$_POST{'warr'};
$f=$_POST{'amt'};
$g=$_POST{'uid'};

$servername ="localhost";
$username ="root";
$password ="";
$dbname="hms";
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die ("Connection Failed!".$conn->connect_error);
}
echo "Connected Susseccfully!";
$sql="INSERT INTO `homeapp`( `dat`, `appno`, `aname`, `acomp`, `amt`, `waranty`, `uid`)VALUES('$a','$b','$c','$d','$f','$e','$g')";
$result=$conn->query($sql);
if($result)
{
	echo ("<script> alert('Added successfully!');window.location='homeapp.php';</script>");
}
else
{
	echo ("<script> alert('error! mysql_error()');window.location='homeapp.php';</script>");
}
?>