

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
<body background="hh.jpeg">

<form action="#" method="post">
 <center><b>
<h1> Grocery List</h1>
</center></b>
<br><br><br><br>
   <div class="container">
   
	<center>
    <label for="uid"><b>User ID :</b></label>
    <input type="text" placeholder="Enter User id" name="uid" autocomplete="off"  required><br></center>
	<center>

    
	<BR>
<center>
    <button  name="submit">SUBMIT</button>
    </center>
	 
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
$sql="SELECT * FROM `grocery` where `uid`='$a'";
$result=$conn->query($sql);
echo "<CENTER><table border ='1'>
<tr>

<th>DATE </th>
<th>ITEM</th>
<th>QUANTITY</th>
<th>AMOUNT</th>
</tr></CENTER>";
if ($result->num_rows >0) {
	while($row=$result->fetch_assoc()) {
		echo "<tr>";
		//echo "<td>".$row["sln"]. "</td>";
		echo "<td>".$row["dat"]. "</td>";
		echo "<td>".$row["item"]. "</td>";
		echo "<td>".$row["qty"]. "</td>";
		echo "<td>".$row["amt"]. "</td>";
	}
	echo "</table>";
}
else {
	echo ("no rows selected");
}

$conn->close();
}
?>

