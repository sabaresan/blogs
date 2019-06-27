<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>login</title>
</head>
<body background="blu.png">
<center><h1 style="font-family:Verdana;font-size:25px;color:#365fa0;"><u><b>Admin Login</b></u></h1></center><br><br>
<form method="POST" action="login.php">
	<center>Enter Username : <input type="text" name="uname"></center><br><br>
	<center>Enter Password : <input type="password" name="password"></center><br><br>
	<center><input type="submit" value="Login" style="width:5%;height:30px;color:white;background:green;"></center>

</form>

</body>
</html>
<?php
session_destroy();
?>