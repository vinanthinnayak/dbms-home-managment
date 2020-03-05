<html>
<style>.button {
  background-color: #000000;
  color: #FFFFFF;
  float: center;
  padding: 10px;
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
}</style>
<style> A {text-decoration:none;}</style>

<body background="hh.jpeg">

<form action="#" method="post">
 
   <div class="container">
   
	<center>
    <label for="uid"><b>User ID :</b></label>
    <input type="text" placeholder="Enter User id" name="uid" autocomplete="off" required><br></center>
	<center>

    
	<BR>
<center>
    <button  name="submit">SUBMIT</button>
	<button type="button" class="cancelbtn"><a href="view.php" style="color:#000000">BACK</button>
    </center>
	<h1>TODAY's SUMMARY</h1>
	 
  </div>
  </form>
  </body>
  </html>
  
    
   <?php
   
   if(isset($_POST['submit'])){
session_start();
$a=$_POST{'uid'};



$servername ="localhost";
$username ="root";
$password ="";
$dbname="hms";
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die ("Connection Failed!".$conn->connect_error);
}
//echo "Connected Susseccfully!";
$sql="CALL `sumcal` ($a);";

$result=$conn->query($sql);

if ($result->num_rows >0) {
	while($row=$result->fetch_assoc()) {
		
		echo ("<h1>GROCERY :".$row["grocsum"]." Rs.</h1><br>");
		//echo ("<h1>".$row["grocsum"]." Rs.</h1><br>");
	}
}
else {
	echo ("no rows selected");
}

$conn->close();
}
?>





<?php
   
   if(isset($_POST['submit'])){
//session_start();
$a=$_POST{'uid'};



$servername ="localhost";
$username ="root";
$password ="";
$dbname="hms";
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die ("Connection Failed!".$conn->connect_error);
}
//echo "Connected Susseccfully!";
$sql="CALL `billcal` ($a);";

$result=$conn->query($sql);

if ($result->num_rows >0) {
	while($row=$result->fetch_assoc()) {
		
		echo ("<h1>BILLS :".$row["billsum"]." Rs.</h1><br>");
		//echo ("<h1>".$row["billsum"]." Rs.</h1><br>");
	}
}
else {
	echo ("no rows selected");
}

$conn->close();
}
?>




<?php
   
   if(isset($_POST['submit'])){
//session_start();
$a=$_POST{'uid'};



$servername ="localhost";
$username ="root";
$password ="";
$dbname="hms";
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die ("Connection Failed!".$conn->connect_error);
}
//echo "Connected Susseccfully!";
$sql="CALL `medcal` ($a);";

$result=$conn->query($sql);

if ($result->num_rows >0) {
	while($row=$result->fetch_assoc()) {
		
		echo ("<h1>MEDICINE :".$row["medsum"]." Rs.</h1><br>");
		//echo ("<h1>".$row["medsum"]." Rs.</h1><br>");
	}
}
else {
	echo ("no rows selected");
}

$conn->close();
}
?>



<?php
   
   if(isset($_POST['submit'])){
//session_start();
$a=$_POST{'uid'};



$servername ="localhost";
$username ="root";
$password ="";
$dbname="hms";
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die ("Connection Failed!".$conn->connect_error);
}
//echo "Connected Susseccfully!";
$sql="CALL `homecal` ($a);";

$result=$conn->query($sql);

if ($result->num_rows >0) {
	while($row=$result->fetch_assoc()) {
		
		echo ("<h1>HOME APPS : ".$row["homesum"]." Rs.</h1><br>");
		//echo ("<h1>".$row["homesum"]." Rs.</h1><br>");
	}
}
else {
	echo ("no rows selected");
}

$conn->close();
}
?>