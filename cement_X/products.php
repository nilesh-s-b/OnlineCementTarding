<html>
<title>Online Cement Trading</title>

<head>
	<link rel="stylesheet" href="css/cement.css">
	<link rel="stylesheet" href="css/login_register.css">
	<link rel="stylesheet" href="css/products.css">
	<script type="text/javascript" src="js/cement.js"> </script>
	
</head>
	<header>
		<button class="tablink" onClick="home()">Home</button>
		<button class="tablink" onClick="products()">Products</button>
		<button class="tablink" onClick="lr()">Login/Register</button>
		<button class="tablink" onClick="contact()">Contact</button>
		<button class="tablink" onClick="admin()">Admin Login</button>

	
		<h1>Products</h1>
	</center>
	</header>
	<?php
		$c=mysqli_connect("localhost","root","toor") or die ("Error in Conncetion");
	mysqli_select_db($c,"cement") or die("Error to connect database");
	?>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method=POST>
	<body>
		<br><br>
			<center>
			<h1>Quality Products</h1>
			<h2>
			Here are our most sold and popular products
			</h2>
			<h3>
			Select the products
			</h3>
			</center>
		<br>
		<div class="row">
			<div class="column">
			<img src="img/c1.png" alt="Ambuja" style="width:100%">
			
			</div>
			<div class="column">
				<img src="img/c8.png" alt="Ultratech" style="width:100%">
			
			</div>
			<div class="column">
				<img src="img/3.png" alt="Birla" style="width:100%">
			
			</div>
			<div class="column">
				<img src="img/c3.jpg" alt="Chettinad" style="width:100%">
			
			</div>
			<div class="column">
				<img src="img/c4.jpg" alt="Jaypee" style="width:100%">
			
			</div>
			<div class="column">
				<img src="img/c5.jpg" alt="JSW" style="width:100%">
			
			</div>
			
		</div>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="custreg.php"> Buy Now</a>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="custreg.php"> Buy Now</a>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="custreg.php"> Buy Now</a>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="custreg.php"> Buy Now</a>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="custreg.php"> Buy Now</a>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="custreg.php"> Buy Now</a>	
	</body>
	</form>
	<?php
	$rows=mysqli_query($c,"select * from product") or die("Query error");
	
	echo "<center>";
	echo "<br><table id='result'>";
	echo "<tr>";
	
	echo "<th>Product Brand</th>";
	echo "<th>Product Type</th>";
	echo "<th>Color</th>";
	echo "<th>Grade</th>";
	echo "<th>Rate</th>";
	echo "</tr>";
	
	while($rec=mysqli_fetch_array($rows))
	{		
		echo "<tr>";
		
		echo "<td>".$rec[1]."</td>";
		echo "<td>".$rec[2]."</td>";
		echo "<td>".$rec[4]."</td>";
		echo "<td>".$rec[3]."</td>";
		echo "<td>".$rec[5]."</td>";
		echo "</tr>";
	}
	echo "</table></center>";
	?>
<br>
</html>
