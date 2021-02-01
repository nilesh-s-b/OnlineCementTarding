<html>

<title>Login Admin</title>

<head>
	<link rel="stylesheet" href="../css/cement.css">
	<link rel="stylesheet" href="css/admin.css">
	<link rel="stylesheet" href="../css/login_register.css">
	<script type="text/javascript" src="js/cement.js"> </script>
</head>
	<header>
		<button class="tablink" onClick="home()">Home</button>
		<button class="tablink" onClick="products()">Products</button>
		<button class="tablink" onClick="lr()">Login/Register</button>
		<button class="tablink" onClick="admin()">Admin Login</button>

		<h1>Admin Login</h1>

	</header>
	<br>
	<div class="main_container">
	<center>
	<h1 style='color:black'> Welcome Admin</h1>
	</center>
	<br>
	<div class=f>
		<center>
			<img src="images/key.png" height=150 width=170>
		</center>
		<form  name="login" method="get">
			
				<b><font face='Verdana' size='3' color=black>
				Username: </b></font></i>
				<input type="text" id="tfx" name="uname">
				<br>
				<?php if(isset($_GET['uname'])) echo "<font color='red' size='2'>* Name is required </font>"; ?>
			
				<br><b>Password: </b><br>
				<input type="password" id="tfx" name="password">
				<br>
				<?php if(isset($_GET['password'])) echo "<font color='red' size='2'>* Password is required"; ?>
				<br>
				<button type="submit"  id="btn" name="log">Login</button>
				<button type="reset" id="btn" name="reset">Clear</button>
			<br><br>
		</form>
	</div>
	</center>
	</body>                 
<?php
	if(isset($_GET['log']))
	{
		session_start();
		$s=extract($_GET);
		$c=mysqli_connect("localhost","root","toor") or die ("Error in Conncetion");
		mysqli_select_db($c,"cement") or die("Error to connect database");
		$rows=mysqli_query($c,"select * from admin where Username='$uname' and Password='$password'");
		if(mysqli_num_rows($rows)>=1)
		{
			$r=mysqli_fetch_row($c,$rows);
		 $_SESSION['id']=$r[0];
		 header("Location:default.php");
		}
		//else
			//echo "Invalid Login";
	}
?>
</html>
