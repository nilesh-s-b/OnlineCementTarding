<html>
<style>
/* Add a black background color to the top navigation */
.topnav {
    background-color: #333;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 25px;
	font-family:Bradley Hand ITC;
	left:20px;
	right:20px;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
    background-color: #4CAF50;
    color: white;
}
form
{
	color:white;
	font-size:20px;
}

table
{
	color:white;
	font-size:20px;
}

.btn3
{
	width:125px;	
	height:30px;
	border-radius:20px;
	color:white;
	background-color:black;
	font-family:georgia;
	font-size:20px;
}

</style>
<h1 style="font-size:75px;
font-weight:bold;

font-family:Vladimir script regular;
color:white;
margin:20px;
text-decoration:none;">

Update Rates

</h1>
<body style="background-image:url('3.jpg');">
<?php
	$qwe=mysqli_connect("localhost","root","toor");
	$x=mysqli_select_db($qwe,"cement");
	$q=mysqli_query($qwe,"Select * from product")or die("select");
	echo"<form method=get>";
	echo"<table>";
	echo"<tr><td>PRODUCT BRAND</td><td> <select name=pb>";
	while($r=mysqli_fetch_array($q))
	{
		extract($r);
		echo "<option value='$pbrand'>$pbrand</option>";
	}
	
	echo "</select><Input type=submit name=add value='ADD NEW BRAND'><br></td></tr>";
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
	echo"<tr><td>RATE FOR 50 BAGS </td><td><Input type=text name=r50><BR></td></tr>";
	echo"<tr><td>RATE ABOVE 100 BAGS </td><td><Input type=text name=r100><BR></td></tr>";
	echo"<tr><td></td><td><input type=submit name=sb value='UPDATE'></td></tr>";
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
			$qwe=mysqli_connect("localhost","root","");
			$x=mysqli_select_db($qwe,"cement");
			$q=mysqli_query($qwe,"Select * from product")or die("Select * from product where pbrand=$pb and ptype=$pt and Grade=$gr and ctype=$ct");
			if($r1=mysqli_fetch_array($q))
			{
				
				extract($r1);
				//echo "$pbrand=$pb,$ptype=$pt,$Grade=$gr,$ctype=$ct";
				mysqli_query($qwe,"UPDATE product set rate=$r,ratefor50=$r50,rateabove50=$r100 Where (pbrand='$pb' and ptype='$pt' and Grade=$gr and ctype='$ct')")or die("update");
			}
	}
?>
	
		
