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
<body background="ha.jpg">
<body>
<center>
<h1>HOME APPLIANCES</h1></center><br>
<form action="addhome.php" method="POST">
<table>
  <tr>
    <th>Date</th>
    <th>Appliance no.</th>
	 <th>Appliance name</th>
	<th>Company</th>
    <th>Amount</th>
	<th>Warranty</th>
	<th>Uid</th>
  </tr>
  


<tr>
    <td> <input type="date" placeholder="Enter the date" name="dat" autocomplete="off"  required></td>
    <td><input type="number" placeholder="Enter appliance number" name="appno" autocomplete="off"  required></td>
    <td><input type="text" placeholder="Enter appliance name" name="aname" autocomplete="off" required></td>
	<td><input type="text" placeholder="Enter company" name="comp" autocomplete="off" required></td>
	<td><input type="number" placeholder="Enter amount in Rs." name="amt" autocomplete="off" required></td>
	<td><input type="number" placeholder="Enter warranty years" name="warr" autocomplete="off" required></td>
	<td><input type="text" placeholder="Enter your uid" name="uid" autocomplete="off"  required></td>
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
    <button type="button" class="cancelbtn"><a href="homeapp.php" style="color:#000000">CANCEL</button>
    </CENTER>
	<button type="button" class="cancelbtn"><a href="add.php" style="color:#000000">BACK</button
  </div>
</form>
	
	

</body>
</html>
