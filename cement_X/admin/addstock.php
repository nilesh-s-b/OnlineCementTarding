<html>
<?php
include("default.php");
?>
<h1	style="font-size:75px;
	font-weight:bold;
	font-family:Vladimir script regular;
	color:white;
	margin:20px;
	text-decoration:none;">
Update Stock	</h1>

<body style="background-image:url('3.jpg');">
<form>
	<?php
		$qwe=mysqli_connect("localhost","root","toor");
		$x=mysqli_select_db($qwe,"cement");
		$q=mysqli_query($qwe,"Select * from product")or die("select");
	?>
	<table align=center>
	<tr><td>SELECT CEMENT BRAND</td><td><select name=pid>
		<?php 
			while($r=mysqli_fetch_array($q))
			{
				extract($r);
				echo "<option value='$pid'>".$pid." ".$pbrand."</option>";
			}
		?>
	</td></tr>	
	<tr><td>HOW MANY BAGS TO ADD</td><td>
		<input type=text name="quan1">
	</tr></td>
	<br><br>
	<tr><td>
	<br>
	</tr></td>
	<tr><td>
	<input type=submit value="ADD" class=btn4 name="add">
	</tr></td>
</form>
</html>



<?php

if(isset($_GET['add']))
	{
	$a=$_GET['sid'];
	$b=$_GET['quan1'];
	$qwe=mysqli_connect("localhost","root","toor");
	$x=mysqli_select_db($qwe,"cement");
		mysqli_query($qwe,"update stock set quan=quan+$b")or die("update");
	  echo "<font color=green size=6px>STOCK Updated Successfully";
	}

?>
