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
<script>
function f(ino,y)
{
alert(y);
	
}
</script>
<body text=white>
<?php include("default.php"); ?>
<br><br>
<center>
<?php
session_start();
//if(isset($_SESSION['uid']))
{
extract($_GET);
//$usn=$_SESSION['uid'];
$dt=date('Y-m-d');
	$qwe=mysqli_connect("localhost","root","toor");
	$x=mysqli_select_db($qwe,"cement");
      $rrr=mysqli_query($qwe,"select * from bill");
	  echo"<font size='10px' color=white><b>Orders</b>";
while(	  $ramt=mysqli_fetch_array($rrr))
{
	echo "<table frame=box><tr ><td colspan=2 align=center></td></tr>";
	echo "<tr><td></td></td>";
	echo "<tr><td>User Name</td><td>$ramt[1]</td></tr>";
	echo "<tr><td>Date of Order<td>$ramt[2]</tr><tr><td colspan=2>";
	echo "<table border=1>";
	
	echo "<tr><td>Product Id<td>Product Name <td>Type of Cement<td>Qty";
      $rr1=mysqli_query($qwe,"select product.*,orders.* from orders,product  where (orders.pid=product.pid) and oid=$ramt[0]");
	  while($rs=mysqli_fetch_array($rr1))
	  {
	
	echo "<tr><td>$rs[0]<td>$rs[1]<td>$rs[2].$rs[3]<td>".$rs['Qty']."</tr>";
	}
	echo "</table>";
echo "<tr><td>Amount<td>$ramt[5]";
echo "<tr><tr><td>Transportation Charges<td>$ramt[6]</tr></tr></table>";
echo "<tr><td></td></td>";

}
	
/*}
else
{
	header("refresh:2;url=login.php");
	echo "<font color=white>You must login</font>";
	
}*/	
}
?>
