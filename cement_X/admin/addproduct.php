<html>
<style>

table
{
	color:white;
	font-size:20px;
}

.btn4
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

ADD PRODUCTS
</h1>
<body style="background-image:url('3.jpg');">
<form>

<table align=center>
	   <tr><td>SELECT CEMENT BRAND</td><td><select  name="brand1">
							 <option></option>
							 <option value="Ambuja">Ambuja</option>
							 <option value="Birla">Birla</option>
							 <option value="BirlaGold">Birla Gold</option>
							 <option value="ACC">ACC</option>
							 <option value="Bangur">Bangur</option></select></td></tr>	
	   <tr><td>HOW MANY BAGS TO ADD</td><td><input type=text name="quan1"></tr></td>
<br><br>
<tr><td><br></tr></td>
					<tr><td><input type=submit value="ADD" class=btn4 name="add"></tr></td>

</form>
</html>



<?php

if(isset($_GET['add']))
	{
	$a=$_GET['brand1'];
	$b=$_GET['quan1'];
	//echo $a;
	$qwe=mysqli_connect("localhost","root","toor");
	$x=mysqli_select_db($qwe,"cement");
	$q=mysqli_query($qwe,"Select * from stock where pname='$a'")or die("select");
	
	if($rec=mysqli_fetch_array($q))
	{
	    extract($rec);
		$quan=$quan+$b;
		//echo $quan;
        $err="<font color=green size=6px>STOCK Updated Successfully";
		mysqli_query($qwe,"update stock set quan=$quan where pname='$a'")or die("update");
		echo $err;
	}
	else
	{
		$err="Error";
	echo "<font color=white size=7>$err</font>";
	}
}

?>
