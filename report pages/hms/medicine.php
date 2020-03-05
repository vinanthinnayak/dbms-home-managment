<!DOCTYPE html>
<html>
<head>
<style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
</style>
</head>
<body background="tablets.jpg">
<body>
<center>
<h1>MEDICINE</h1></center><br>
<form action="medadd.php" method="POST">
<table>
  <tr>
    <th>Date</th>
    <th>Medicine</th>
    <th>Doc</th>
	<th>Amount</th>
	<th>Uid</th>
  </tr>
  


<tr>
    <td> <input type="date" placeholder="Enter date" name="dat" autocomplete="off" required></td>
    <td><input type="text" placeholder="Enter medicine name" name="medname" autocomplete="off"  required></td>
    <td><input type="text" placeholder="Enter Doctor name" name="doc" autocomplete="off"  required></td>
	<td><input type="number" placeholder="Enter amount in Rs." name="amt" autocomplete="off"  required></td>
	<td><input type="text" placeholder="Enter your uid" name="uid" autocomplete="off" required></td>
  </tr>

</TABLE>

<BR><BR><BR>
<center>
    <button type="submit">ADD</button>
    </center>
  </div>
  <BR>
<CENTER>
  <div class="container">
    <button type="button" class="cancelbtn"><a href="medicine.php" style="color:#000000">CANCEL</button>
    </CENTER>
	<br><button type="button" class="cancelbtn"><a href="add.php" style="color:#000000">BACK</button>
  </div>
</form>
	
	

</body>
</html>
