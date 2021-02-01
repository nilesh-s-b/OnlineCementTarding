<html>
	<head>
		<title>View</title>
		<div>
		<?php include 'default.php';?>
		</div>
	</head>
	<body>
	<?php
	$c=mysqli_connect("localhost","root","toor") or die ("Error in Conncetion");
	mysqli_select_db($c,"cement") or die("Error to connect database");
	
	$rows=mysqli_query($c,"select * from userreg") or die("Query error");
	
	echo "<center>";
	echo "<br><br><br><br><table class='table' border=1 style='width:70%;'>";
	echo "<tr>";
	echo "<th style='text-align:center'>Customer Id</th>";	
	echo "<th style='text-align:center'>Name</th>";
	echo "<th style='text-align:center'>Contact</th>";
	echo "<th style='text-align:center'>E-mail</th>";
	echo "</tr>";
	
	while($rec=mysqli_fetch_row($rows))
	{
		echo "<tr>";
		echo "<td align=center><font color=black size=5px face=\"Monotype Corsiva\">".$rec[0]."</font></td>";
		echo "<td align=center><font color=black size=5px face=\"Monotype Corsiva\">".$rec[1]."</font></td>";
		echo "<td align=center><font color=black  size=5px face=\"Monotype Corsiva\">".$rec[3]."</font></td>";
		echo "<td align=center><font color=black size=5px face=\"Monotype Corsiva\">".$rec[4]."</font></td>";
		echo "</tr>";
		
	}
	echo "</table></center>";
	
	
	?>
