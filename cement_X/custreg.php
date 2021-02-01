
<html>
<title>Online Cement Trading</title>

<head>
	<link rel="stylesheet" href="css/cement.css">
	<link rel="stylesheet" href="css/login_register.css">
	<script type="text/javascript" src="js/cement.js"> </script>
</head>
	<header>
		<button class="tablink" onClick="home()">Home</button>
		<button class="tablink" onClick="products()">Products</button>

		<button class="tablink" onClick="lr()">Login/Register</button>
		<button class="tablink" onClick="contact()">Feedback</button>
		<button class="tablink" onClick="about()">About</button>
		<button class="tablink" onClick="admin()">Admin Login</button>
		<h1>Login/Register</h1>
		
	</header>
	
	<?php

		$un=$_POST['un'];
		$pwd=$_POST['pwd'];
		
		if(empty($un) || empty($pwd))
		{
			$up="Please Enter username and password";
		}
		else
		{
			$qwe=mysqli_connect("localhost","root","toor");
			
			$x=mysqli_select_db($qwe,"cement");
			
			$result=mysqli_query($qwe,"select usn,cpwd from userreg where usn='$un' and cpwd='$pwd'");
			
			$count=mysqli_num_rows($result);
			
			if($count>=1)
			{
				session_start();
				$_SESSION['uid']=$un;
				header("location:purchaseorder.php");
			}			
			else
			{
				$err="<font color='red' size=6>Login failed</font>";
				echo $err;
			}	
		}
	
if(isset($_POST['register']))
	header("Location:register.php");
?>
	
	<!-- Login Modal Content -->
		<form method=POST action="<?php echo $_SERVER['PHP_SELF']; ?>">

			<div class="main_container">
			<h1>
			Login here to continue your orders
			</h1>
				<b>Username</b><br>
					<input type="text" placeholder="Enter Username" name="un" required pattern="^[0-9a-z0-9]+" title="ContainOnlyCharacters" id="tf3">
					<?php echo "<i><font face='Verdana' size='2' color=red>".$uErr."</font></i>"; ?>
					<br>
				<b>Password</b><br>
					<input type="password" placeholder="Enter Password" name="pwd"  required id="tf4">
					<?php echo "<i><font face='Verdana' size='2' color=red>".$pErr."</font></i>"; ?>
					<br>
					<span class="psw"> <a href="forgot_password.php">Forgot password?</a></span><br><br>
				<button type="submit" id="btn" onclick="return check();">Login</a></button>&nbsp;

				<button onclick="document.getElementById('id01').style.display='block'" id="btn">Signup</button>
				<br>
				<br><br>
			<?php echo "<marquee><i><font face='Verdana' size='4' color=red>".$up."</font></i></marquee> <br>"; ?>
			<?php echo "<marquee><i><font face='Verdana' size='3' color=green>".$dbGet."</font></i></marquee>"; ?>
			</div>
			<br>
		</form>


	<!-- The Signup Modal -->
	<div id="id01" class="modal">
		<span onclick="document.getElementById('id01').style.display='none'"class="close" title="Close Modal">&times;</span>
		
	<!-- Signup Modal Content -->
	<form class="modal-content animate" action="register.php" method=POST>
			<div class="container">
			<h1>
			Register here to purchase the best products.
			</h1>
				<b>First Name : </b><br>
					<input type="text" placeholder="Enter First Name" name="fn"  required pattern="^[A-Za-z]+" title="ContainOnlyCharacters" id="tf"><br>
				<b>Last Name : </b><br>
					<input type="text" placeholder="Enter Last Name" name="ln" pattern="^[A-Za-z]+" title="ContainOnlyCharacters"  required id="tf"><br>
				<b>Mobile Number : </b><br>
					<input type="text" placeholder="Enter Your Mobile Number" name="mob" required pattern="^[0-9].{10}+" id="tf"><br>
				<b>E-mail : </b><br>
					<input type="text" placeholder="Enter e-mail" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  id="tf"><br>
				<b>Username : </b><br>
					<input type="text" placeholder="Enter Username" name="usn" pattern="^[0-9a-z0-9]+" required id="tf"><br>
				<b>Set Password : </b><br>
					<input type="password" placeholder="Set Password" name="spword"  required pattern="[A-Z](?=.*[a-z])(?=.*[A-Za-z0-9]).{8,}" title="Contain First Letter Capital & 8 letters with combination of uppercase and lowercase and digits" id="tf1"><br>
				<b>Comfirm Password : </b><br>
					<input type="password" placeholder="Comfirm Password" name="cpwd" required id="tf2"><br>
					&nbsp;&nbsp;
				<b>Address : </b><br>	
				<input type="text" placeholder="Your Delivery Address" name="addr" required id="tf"><br>
				<button type="submit" name="register" id="btn" onclick="return validate()">Submit</button>&nbsp;
				<button type="reset" id="btn" name="id01">Reset</button>
				<div class="container" style="background-color:#ccc">
				<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel
					</button>
				</div>
			</div>
 		</form>
	</div>
</body>

</html>
