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
<body background="watercolor2.png">
<form action="newacc.php" method="post">
 <center><b>
<h1> NEW USER</h1>
</center></b>
<br><br>
<CENTER>
<h2> please fill out all details </h2></CENTER>
   <div class="container"><PRE>
   
	<center>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" autocomplete="off" required></center>
	<center>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" autocomplete="off" required>
	</center>
	
	<center>
    <label for="fname"><b>Fullname</b></label>
    <input type="text" placeholder="Enter Full name" name="fname" autocomplete="off"required></center>
	
	<center>
    <label for="age"><b>Age</b></label>
    <input type="text" placeholder="Enter Age" name="age" autocomplete="off" required></center>
	
	<center>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter E-mail id" name="email" autocomplete="off" required></center>
	
	<center>
    <label for="uid"><b>unique uid</b></label>
    <input type="text" placeholder="Enter Unique integer" name="uid" autocomplete="off" required></center>
	<BR><BR><BR></PRE>
	
	<center>
    <button type="submit">CREATE ACCOUNT</button>
    </center>
  </div>
  <BR>
<CENTER>
  <div class="container">
    <button type="button" class="cancelbtn"><a href="index.php" style="color:#000000">CANCEL</button>
    </CENTER>
  </div>
</form>

	
	
	
	
	
