<?php
$uname=$_POST['uname'];//username
$password=$_POST['password'];//password 
session_start();

$post=mysqli_connect("localhost","root","","post");//mysqli("localhost","username of database","password of database","database name")
$result=mysqli_query($post,"SELECT * FROM `register` WHERE `uname`='$uname' && `password`='$password'");
$count=mysqli_num_rows($result);
if($count==1)
{
	echo ".....................Login success..................";
	$_SESSION['log']=1;
	header("refresh:2;url=admin.php");

}
else
{
	echo "please fill proper details";
	header("refresh:2;url=index.php");// it takes 2 sec to go index page
}


?>