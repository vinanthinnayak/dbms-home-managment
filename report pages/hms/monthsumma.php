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
 <center><b>
<h1> Monthly Summary</h1>
</center></b>
<br><br><br><br>
   <div class="container">
   
	<center>
    <label for="uid"><b>User ID :</b></label>
    <input type="text" placeholder="Enter User id" name="uid" autocomplete="off"  required><br>
	<label for="month"><b>Month :</b></label>
    <input type="text" placeholder="Enter the month" name="month" autocomplete="off"  required><br>
	
</center>
	<center>

    
	<BR>
<center>
    <button  name="submit">SUBMIT</button>
	<button type="button" class="cancelbtn"><a href="view.php" style="color:#000000">BACK</button>
    </center>
	 
  </div>
  </form>
  </body>
  </html>
  
  <?php
   
   if(isset($_POST['submit'])){
session_start();
$a=$_POST{'uid'};
$b=$_POST{'month'};
$servername ="localhost";
$username ="root";
$password ="";
$dbname="hms";
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die ("Connection Failed!".$conn->connect_error);
}
//echo "Connected Susseccfully!";
$sql=("SELECT SUM(grocery.amt) AS gs FROM `grocery` WHERE dat BETWEEN '2019-$b-01' AND '2019-$b-30' AND uid='$a'");
	
$result=$conn->query($sql);

if ($result->num_rows >0){
	
	while($row=$result->fetch_assoc()) {
		//echo "<tr>";
		echo "<h1> Grocery : ".$row["gs"]. " Rs.</h1>";
		
		
	}
}
	//echo "</table>";
		//echo "<tr><h1> sln : ".$row["sln"]. "</h1><h1> Date : ".$row["dat"]. "</h1><h1> ITEM : ".$row["item"]. "</h1><h1> Quantity : ".$row["qty"]. "</h1><h1> Amount : ".$row["amt"]. "</h1></tr>";
	else
	{ echo "errorr!!";
	}


   }
?>


  
  <?php
   
   if(isset($_POST['submit'])){
//session_start();
$a=$_POST{'uid'};
$b=$_POST{'month'};
$servername ="localhost";
$username ="root";
$password ="";
$dbname="hms";
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die ("Connection Failed!".$conn->connect_error);
}
//echo "Connected Susseccfully!";
$sql=("SELECT SUM(bills.amt) AS bs FROM `bills` WHERE dat BETWEEN '2019-$b-01' AND '2019-$b-30' AND uid='$a'");
	
$result=$conn->query($sql);

if ($result->num_rows >0){
	
	while($row=$result->fetch_assoc()) {
		//echo "<tr>";
		echo "<h1> Bills : ".$row["bs"]. " Rs.</h1>";
		
		
	}
}
	//echo "</table>";
		//echo "<tr><h1> sln : ".$row["sln"]. "</h1><h1> Date : ".$row["dat"]. "</h1><h1> ITEM : ".$row["item"]. "</h1><h1> Quantity : ".$row["qty"]. "</h1><h1> Amount : ".$row["amt"]. "</h1></tr>";
	else
	{ echo "errorr!!";
	}


   }
?>

  
  <?php
   
   if(isset($_POST['submit'])){
//session_start();
$a=$_POST{'uid'};
$b=$_POST{'month'};
$servername ="localhost";
$username ="root";
$password ="";
$dbname="hms";
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die ("Connection Failed!".$conn->connect_error);
}
//echo "Connected Susseccfully!";
$sql=("SELECT SUM(medicine.amt) AS ms FROM `medicine` WHERE dat BETWEEN '2019-$b-01' AND '2019-$b-30' AND uid='$a'");
	
$result=$conn->query($sql);

if ($result->num_rows >0){
	
	while($row=$result->fetch_assoc()) {
		//echo "<tr>";
		echo "<h1> Medicine : ".$row["ms"]. " Rs.</h1>";
		
		
	}
}
	//echo "</table>";
		//echo "<tr><h1> sln : ".$row["sln"]. "</h1><h1> Date : ".$row["dat"]. "</h1><h1> ITEM : ".$row["item"]. "</h1><h1> Quantity : ".$row["qty"]. "</h1><h1> Amount : ".$row["amt"]. "</h1></tr>";
	else
	{ echo "errorr!!";
	}


   }
?>

  
  <?php
   
   if(isset($_POST['submit'])){
//session_start();
$a=$_POST{'uid'};
$b=$_POST{'month'};
$servername ="localhost";
$username ="root";
$password ="";
$dbname="hms";
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die ("Connection Failed!".$conn->connect_error);
}
//echo "Connected Susseccfully!";
$sql=("SELECT SUM(homeapp.amt) AS hs FROM `homeapp` WHERE dat BETWEEN '2019-$b-01' AND '2019-$b-30' AND uid='$a'");
	
$result=$conn->query($sql);

if ($result->num_rows >0){
	
	while($row=$result->fetch_assoc()) {
		//echo "<tr>";
		echo "<h1> Home Apps : ".$row["hs"]. " Rs.</h1>";
		
		
	}
}
	//echo "</table>";
		//echo "<tr><h1> sln : ".$row["sln"]. "</h1><h1> Date : ".$row["dat"]. "</h1><h1> ITEM : ".$row["item"]. "</h1><h1> Quantity : ".$row["qty"]. "</h1><h1> Amount : ".$row["amt"]. "</h1></tr>";
	else
	{ echo "errorr!!";
	}


   }
?>