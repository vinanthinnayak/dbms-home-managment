<?php
session_start();
$a=$_POST{'dat'};
$b=$_POST{'medname'};
$c=$_POST{'doc'};
$d=$_POST{'amt'};
$e=$_POST{'uid'};

$servername ="localhost";
$username ="root";
$password ="";
$dbname="hms";
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die ("Connection Failed!".$conn->connect_error);
}
echo "Connected Susseccfully!";
$sql="INSERT INTO `medicine`( `dat`, `medname`, `doc`, `amt`, `uid`) VALUES('$a','$b','$c','$d','$e')";
$result=$conn->query($sql);
if($result)
{
	echo ("<script> alert('Added successfully!');window.location='medicine.php';</script>");
}
else
{
	echo ("<script> alert('error! mysql_error()');window.location='medicine.php';</script>");
}
?>