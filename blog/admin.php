<?php include('server.php'); ?>

<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM article WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$address = $n['address'];
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"href="style.css">

<body>
<style>
	body{
		margin: 0px;
		border: 0px;
		}
		#header{
			width:100%;
			height:100px;
			background:black;
			color:white;
			}
			
</style>
</head>

<div id="header"><br>
<p align="right">
<a href="index.php"class="btn" style=";">Logout</a>
</p><br>
<center><img src="admin.png" alt="logo" id="logo">

<br>

</center>
</div>
<br>
<br>
<br>
<div id="post">
</div>
	
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
<table>
	<thead>
		<tr>
			<th>Products</th>
			<th>About</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['address']; ?></td>
			<td>
				<a style="color:white;" href="admin.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a  style="color:white;"href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
				
			</td>
			
		</tr>
	<?php } ?>
</table>
<form method="post" action="server.php" >
        <input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $name; ?>">
		</div>
		<div class="input-group">
			<label>Address</label>
         <input type="text" name="address" value="<?php echo $address; ?>">
		</div>
		<div class="input-group">
		<?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
	<button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>
		</div>
	</form>
<div class="footer">
<div clss="footer-content"></div>
<div class="footer-section about">
<h1 class="logo-text"><span>Infiniti</span></h1>
<p>Infiniti is funded by Mumbai Angels (www.mumbaiangels.com), a group of experienced professionals-turned-investors. Mumbai Angels, which has as its members CEOs, CFOs, senior lawyers and IT experts with experience in Silicon Valley, California, backs start-ups and young companies</p>
</div>
<div class="contact">
<span><i class="fa fa-phone"></i>&nbsp; 0412-2274741</span>
<span><i class="fa fa-envelope"></i>&nbsp;InfinitiSolutions.com</span>
</div>
<div class="socials">
<a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
<a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
<a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>

</div>
</div>
<div class="footer-section links"></div>
<div class="footer-section contact-form"></div>
<div class="footer-bottom">
&copy; INFINITI SOLUTIONS | Designed by Infiniti
</div>
</div>
</div>
</body>
</html>
