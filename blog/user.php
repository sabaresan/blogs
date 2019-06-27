<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>login</title>
</head>
<body background="blu.png">
<center><h1 style="font-family:Verdana;font-size:25px;color:#365fa0;"><u><b>User Login</b></u></h1></center><br><br>
<form method="POST" action="index.html">
	<center>Enter Username : <input type="text" name="uname"></center><br><br>
	<center>Enter Email    : <input type="email" name="email"></center><br><br>
	<center><input type="submit" value="Login" style="width:5%;height:30px;color:white;background:green;"><p>Or<a href="index.php">Admin</a></p>
</center>

</form>

</body>
</html>
<?php
session_destroy();
?>