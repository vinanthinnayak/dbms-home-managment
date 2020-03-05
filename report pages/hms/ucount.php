

<html>
<style>.button1 {border-radius:50%;
			background-color:#000000;
			color:white;
			padding:20px;
			text-align:center;
			test-decoration:none;
			display:inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;}
</style>
<style> A {text-decoration:none;}</style>
<body background="cf.jpg">

<form action="#" method="post">
 <center><div class="button button1" name="submit"><a href="index.php" style="color:#ffffff">BACK</button></div></center>
<br><br><br><br>
   

  </form>
  </body>
  </html>
  
   <?php

$a=date("Y-m-d");
$b="center";
$servername ="localhost";
$username ="root";
$password ="";
$dbname="hms";
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die ("Connection Failed!".$conn->connect_error);
}
//echo "Connected Susseccfully!";
$sql="SELECT `ct` AS USERS FROM `usercount`;";
$result=$conn->query($sql);
echo "<CENTER><table border ='1'>
<tr>

<th>Total Users </th>

</tr></CENTER>";
if ($result) {
	while($row=$result->fetch_assoc()) {
		echo "<tr>";
		//echo "<td>".$row["sln"]. "</td>";
		echo "<td align='$b'>".$row["USERS"]. "</td>";
	
	}
	echo "</table>";
}
else {
	echo ("no rows selected");
}

$conn->close();

?>

