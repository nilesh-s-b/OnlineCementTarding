<html>
<?php 
include("default.php");
?>
<center>
<h1 style="font-size:75px;
font-weight:bold;

font-family:Vladimir script regular;
color:white;
margin:20px;
text-decoration:none;">

Update Rates

</h1>
<?php
	$qwe=mysqli_connect("localhost","root","toor");
	$x=mysqli_select_db($qwe,"cement");
	$q=mysqli_query($qwe,"Select * from product")or die("select");
	echo"<form method=GET>";
	echo"<table class=table style='width:50%'>";
	echo"<tr><td>PRODUCT BRAND</td><td> <select name=pid>";
	while($r=mysqli_fetch_array($q))
	{
		extract($r);
		echo "<option value='$pid'>".$pid." ".$pbrand."</option>";
	}
	echo "</select><br></td></tr>";
	echo"<tr><td>PRODUCT TYPE </td><td><select name=pt>";
	echo "<option value='PPC'>PPC</option>";
	echo "<option value='OPC'>OPC</option>";
	echo "<option value='IS'>IS</option>";
	echo "</select><br></td></tr>";
	echo"<tr><td>PRODUCT GRADE </td><td><select name=gr>";
	echo "<option value='43'>43</option>";
	echo "<option value='53'>53</option>";
	echo "</select><br></td></tr>";
	echo"<tr><td>CEMENT TYPE </td><td><select name=ct>";
	echo "<option value='White'>WHITE</option>";
	echo "<option value='Black'>BLACK</option>";
	echo "</select><br></td></tr>";
	echo"<tr><td>PRODUCT RATE </td><td><Input type=text name=r><BR></td></tr>";
	echo"<tr><td></td><td><input type=submit name=sb value='UPDATE'></td></tr>";
	echo "</table>";
	if(isset($_GET['sb']))
	{
		$pid=$_GET['pid'];
		$pt=$_GET['pt'];
		$gr=$_GET['gr'];
		$ct=$_GET['ct'];
	 	$r=$_GET['r'];
		$r50=$_GET['r50'];
		$r100=$_GET['r100'];
			$qwe=mysqli_connect("localhost","root","toor");
			$x=mysqli_select_db($qwe,"cement");
			$q=mysqli_query($qwe,"Select * from product")or die("Select * from product where pbrand=$pb and ptype=$pt and Grade=$gr and ctype=$ct");
			if($r1=mysqli_fetch_array($q))
			{
				
				extract($r1);
				//echo "$pbrand=$pb,$ptype=$pt,$Grade=$gr,$ctype=$ct";
				mysqli_query($qwe,"UPDATE product set rate=$r where pid='$pid'")or die("update");
			}
	}
?>
