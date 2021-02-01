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
<?php include("Navbarmenu.html"); ?>
<center><h1 style="color:white">Products & Rates </h1>
<?php


	$qwe=mysqli_connect("localhost","root","toor");
	$x=mysqli_select_db($qwe,"cement");
	$q=mysqli_query($qwe,"Select * from product")or die("select");

	echo"<table cellpadding=10 cellspacing='20'  align=center  frame=box>";
	echo"<tr style='border-bottom:thick double white'><th>PRODUCT BRAND</th><tH>COLOR<th>PRODUCT TYPE</th><th>RATE</th><th>FOR 50 BAGS</th><th>ABOVE 100 BAGS</th></tr>";
	echo"<center>";
	
	while($a=mysqli_fetch_array($q))
	{
		extract($a);
		if($ctype=='Black')
			
		echo"<tr ><td>$pbrand</td><td bgcolor=gray><td>$ptype</td><td>$rate</td><td>$ratefor50</td><td>$rateabove50</td></tr>";
		else
		echo"<tr><td>$pbrand</td><td bgcolor=white><td>$ptype</td><td>$rate</td><td>$ratefor50</td><td>$rateabove50</td></tr>";
			
	}
	
	echo"</center></table>";





?>


</body>
</html>
