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

Add a Product

</h1>
<body style="background-image:url('3.jpg');">
<?php
	$qwe=mysqli_connect("localhost","root","toor");
	$x=mysqli_select_db($qwe,"cement");
	$q=mysqli_query($qwe,"Select * from product")or die("select");
	echo"<form method=get>";
	echo"<table frame=box class=table style='width:50%'>";
	echo"<tr><td>PRODUCT BRAND</td><td> <input type=text  name=pb>";
	echo "</td></tr>";
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
	//echo "<input type=radio name=type value='White'>White<input type=radio name=type value='Black'>Black";
	echo"<tr><td>PRODUCT RATE (per bag)</td><td><Input type=text name=r><BR></td></tr>";
	echo"<tr><td></td><td><input type=submit name=sb value='ADD'></td></tr>";
	echo "</table>";
	if(isset($_GET['sb']))
	{
		$pb=$_GET['pb'];
		$pt=$_GET['pt'];
		$gr=$_GET['gr'];
		$ct=$_GET['ct'];
	 	$r=$_GET['r'];
		$r50=$_GET['r50'];
		$r100=$_GET['r100'];
			$qwe=mysqli_connect("localhost","root","toor");
			$x=mysqli_select_db($qwe,"cement");
				mysqli_query($qwe,"insert into product(pid,pbrand,ptype,Grade,ctype,rate) values('','$pb','$pt','$gr','$ct',$r)") or die("error");
				$rows=mysqli_query($qwe,"select max(pid) from product");
				$r=mysqli_fetch_array($rows);
				mysqli_query($qwe,"insert into stock values( $r[0],0)");
				
				//mysqli_query($qwe,"UPDATE product set rate=$r,ratefor50=$r50,rateabove50=$r100 Where (pbrand='$pb' and ptype='$pt' and Grade=$gr and ctype='$ct')")or die("update");
			
	}
?>
	
		
