<html>
<html>
<title>Online Cement Trading</title>

<head>
	<link rel="stylesheet" href="css/cement.css">
	<link rel="stylesheet" href="css/login_register.css">
	<script type="text/javascript" src="js/cement.js"> </script>
</head>
	<header>	
	<h1>Place Order</h1>
	</header>
<br>
	<?php
	session_start();
	if(isset($_SESSION['uid']))
	{
	?>
<div class="main_container">
	<table>
		<form>
	<?php	
	$c=mysqli_connect("localhost","root","toor") or die ("Error in Conncetion");
	mysqli_select_db($c,"cement") or die("Error to connect database");
	$rows=mysqli_query($c,"select * from product") or die("Query error");
	
	
	echo "<table border=1 style='width:70%;'>";
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
	echo "</table>";
	?>
	<center>
			<tr><td>
			<h2>Select Item : </h2>
			
			 <?php 
				$qwe=mysqli_connect("localhost","root","toor");
				$x=mysqli_select_db($qwe,"cement");
				
				echo "<td><select name=pid required>";
				$q=mysqli_query($qwe,"SELECT * FROM product")
					or
					die("select");
				while($r=mysqli_fetch_array($q))
				{
					
					echo "<option required value=$r[0]->$r[0].$r[1] - $r[2]</option>";
				}
			?>
				</select>
		
				<td><button type=submit name="explore" value="Explore" id="btn">Explore</button>
		</form>
	</table>
	<?php
	if(isset($_GET['explore']))
	{
		$noi=$_GET['pid'];
		echo "<hr><form action='bill.php' method=GET>
			<table align=center>
			<tr>
				<td>Product_Id<td>Brand<td>Cement_Types<td>QUANTITY
			</tr>";
	for($i=0;$i<count($noi);$i++)
	{
		$qr1=mysqli_query($qwe,"SELECT * FROM product WHERE pid='".$noi[$i]."'")
			or
			die("select");
		$qr=mysqli_fetch_array($qr1);
		echo "<tr>
			<td><input type=text name=pid value=$qr[0] readonly>";
	?>
	<td><input type=text name=pb value="<?php echo $qr[1]; ?>" readonly>
	<td><input type=text name=ctype value="<?php echo $qr[2]; ?>" readonly>
	<td><input type=text name="quan"></tr>
	<?php
	}
	?>
	</table><br><br>
		<table>
			<tr>
				<td>Delivery Address <td><textarea rows=3 cols=30 name=address required></textarea></tR>
				<tr>
					<td>Transport Type :
					<td><input type=radio name=transport value="self" required>Self
					<input type=radio name=transport value="us" required> By Us
				</tr>
			</tr>   
			<tr>
			<td colspan=2 align=center><input type=submit value="Confirm" id="btn">
			</tr>
			</table>
</div>
</form>
</html>
<?php	
	}
	}
	else
	{
		header("refresh:2;url=login.php");
		echo "<font color=white>You must login</font>";
	}
?>

