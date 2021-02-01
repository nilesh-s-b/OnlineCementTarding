
<html>
<head>
	<link rel="stylesheet" href="css/cement.css">

	<link rel="stylesheet" href="css/bill.css">
	<script type="text/javascript" src="js/cement.js"> </script>
	<script>
		function copy()
		{
		window.print();
		}
		function done()
		{
		alert('Order is confirmed and processed');
		window.location.href = "index.php";
		}
	</script>
</head>
	<header>
		<button class="tablink" onClick="home()">Home</button>
		<button class="tablink" onClick="products()">Products</button>

		<button class="tablink" onClick="lr()">Login/Register</button>
		<button class="tablink" onClick="contact()">Feedback</button>
		<button class="tablink" onClick="about()">About</button>
		<button class="tablink" onClick="admin()">Admin Login</button>

	
		<h1>Bill</h1>

	</header>

<body>

<?php

	session_start();
	if(isset($_SESSION['uid']))
	{
$qwe=mysqli_connect("localhost","root","toor") or die("connection error");
		$x=mysqli_select_db($qwe,"cement") or die("DB error");
		$pid=$_GET['pid'];
		
		$quan=$_GET['quan'];
		$address=$_GET['address'];
		$t_type=$_GET['transport'];
		
		$uname=$_SESSION['uid'];
		$dt=date('Y-m-d');
		
		$query=mysqli_query($qwe,"SELECT uid,fn,ln FROM userreg WHERE usn='".$uname."' ");
		while($row=mysqli_fetch_array($query))
		{
		$u=$row['uid'];
		$fn=$row['fn'];
		$ln=$row['ln'];
		break;
		}
		
		$query1=mysqli_query($qwe,"SELECT * FROM product WHERE pid='".$pid."' ");
		while($row1=mysqli_fetch_array($query1))
		{
			$pbrand=$row1['pbrand'];
			$ptype=$row1['ptype'];
			$grade=$row1['Grade'];
			$ctype=$row1['ctype'];
			$rate=$row1['rate'];
		}
		
		$tot=$quan*$rate ;
		
		if($t_type=='self')
		{
		$t_rate=0;
		$ttype='Self';
		}
		else
		{
		$t_rate=$tot*0.20;
		$ttype='By us';
		}
		
		$gst=$tot*0.28;
		$tot_amount=$tot+$gst+$t_rate;
		
		$query2=mysqli_query($qwe,"INSERT INTO bill VALUES ('','$dt','$quan','$address','$tot_amount','$t_type')");
		
	?>	
		<div class='info_container'>
				<center><h1>S_P Cement Treding</h1></center>
				<h3> Customer ID : <?php echo $u ; ?></h3>
				<h3> Customer Name : <?php echo $fn." ".$ln ; ?></h3>
				<br>
				<table id="result">
				<tr>
					<th>Product ID</th>
					<th>Product Name</th>
					<th>Product Type</th>
					<th>Grade</th>
					<th>Cement Type</th>
					<th>Qty</th>
					<th>Rate</th>
				</tr>
				<tr>
				<td></td>
				</tr>
				<tr>
					<td><?php echo $pid ; ?></td>
					<td><?php echo $pbrand ; ?></td>
					<td><?php echo $ptype ; ?></td>
					<td><?php echo $grade ; ?></td>
					<td><?php echo $ctype ; ?></td>
					<td><?php echo $quan; ?></td>
					<td><?php echo $rate ; ?></td>
				</tr>
				<tr>
				<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td><b>Total : </td>
					<td></td>
					<td> <?php echo $tot." /-"; ?>
					</td>
					
				</tr>
				
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td><b>GST : </td>
					<td></td>
					<td><?php echo $gst." /-"; ?></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td><b>Transport : </td>
					<td><?php echo $ttype; ?></td>
					<td><?php echo $t_rate." /-"; ?></td>
				</tr>
				<tr>
					<td>---------</td>
					<td>---------</td>
					<td>---------</td>
					<td>---------</td>
					<td>---------</td>
					<td>---------</td>
					<td>---------</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td><b>Total Amount  : </td>
					<td></td>
					<td><b><?php echo $tot_amount."/-"; ?></b></td>
				</tr>
				</table>
				<br>
				<button id="btn" onclick="copy()">Print Bill</button>
				<button id="btn" onclick="done()">Done</button>
			</div>
<?php
	}
	else
	{
	header("refresh:2;url=custreg.php.php");
	echo "<font color=white>You must login</font>";	
	}		
?>

</body>
</html>
