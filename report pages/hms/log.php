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
<body background="hh.jpeg">
<form action="action_page.php" method="post">
 <center><b>
<h1> LOGIN PAGE</h1>
</center></b>
<br><br><br><br>
   <div class="container">
   
	<center>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" autocomplete="off" required><br></center>
	<center>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br>
	</center>
	<BR>
<center>
    <button type="submit">Login</button>
    </center>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  <div class="container">
    <button type="button" class="cancelbtn"><a href="index.php" style="color:#000000">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

