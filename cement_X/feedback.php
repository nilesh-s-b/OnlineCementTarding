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
		<button class="tablink" onClick="gallery()">Gallery</button>
		<button class="tablink" onClick="lr()">Login/Register</button>
		<button class="tablink" onClick="contact()">Feedback</button>
		<button class="tablink" onClick="about()">About</button>
		<button class="tablink" onClick="admin()">Admin Login</button>
	<h1>Feedback</h1>
	</header>
<div class=cont>
<body>
	
	<div class="info_container">
		<h2>
	Please give your feedback,it will be very valuable to us.
	</h2>
	<form method=post enctype="multipart/form-data">
		<br><font size=4>
			&nbsp;<b>Enter Name :</b><br>
			&nbsp;<input type="text" name="uname" placeholder="Enter Your Name" required id="tf4"><br>
			&nbsp;<b>E-mail : </b><br>
			&nbsp;<input type="text" placeholder="Enter e-mail" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  id="tf"><br>
			&nbsp;<b>Comment : </b><br>
			&nbsp;<textarea type="text" rows="4" cols="50"></textarea>
			<br><br>
			&nbsp;<font size=5>Rate : 			
			<input type="radio"   name=rate value=1>1&nbsp;&nbsp;
			<input type="radio"  name=rate value=2>2&nbsp;&nbsp;
			<input type="radio"  name=rate value=3>3&nbsp;&nbsp;
			<input type="radio" name=rate value=4>4&nbsp;&nbsp;
			<input type="radio"  name=rate value=5>5
			<br><br>
			<button type="submit" name="submit" id="btn">Submit</button>
			<br><br>
	</form>
</body>
<?php
	if(isset($_POST['submit']))
	{
		$s=extract($_POST);
		//var_dump($_GET);
		$pupimg=$_FILES['photo'];
		extract($pupimg);
		$fname="Review/".$name;
		copy($tmp_name,$fname);
		
		$c=mysqli_connect("localhost","root","toor") 
				or
			die ("Error in Connection");
		mysqli_select_db($c,"cement")
				or
			die("Error to connect database");
		
		mysqli_query($c,"insert into review values('$uname',$mobile,'$date','$gender','$desc','$fname','$rate')")
				or
			die("Query error");
			
		echo "<center style='margin-left:30px'><br><font color=green size=3px>Record Stored Successfully!!</font></center>";
	  header("Location:feedback.php");
	}
?>
</div>
</html>

