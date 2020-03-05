<?php
session_start();
?>
	
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
<body background="img1.jpg">

<form action="action_page.php" method="post">
<CENTER> <b>
<h1> HELLO USER !</h1>
</CENTER></b>
<br><br><br><br>
   <div class="container">

	<div class="button" width="40" height="100"><CENTER><a href="add.php" style="color:#ffffff">ADD</CENTER></div><BR><BR>
	<div class="button" width="40" height="100"><CENTER><a href="view.php" style="color:#ffffff">VIEW</CENTER></div>
	
	<br><br><br>
	
  
<center>
    <button type="submit"><a href="log.php" style="color:#000000">Logout</button>
    </center>
  </div>
  <BR>
<CENTER>
<div class="container">
    <button type="button" class="cancelbtn">Cancel</button>
    </CENTER>
  </div>
</form>