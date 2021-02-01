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
	
	$rows=mysqli_query($c,"select product.*,stock.quan from product,stock where product.pid=stock.sid") or die("Query error");
	
	echo "<center>";
	echo "<br><br><br><br><table class='table' border=1 style='width:70%;'>";
	echo "<tr>";
	echo "<th style='text-align:center'>Product Id</th>";	
	echo "<th style='text-align:center'>Product Brand</th>";
	echo "<th style='text-align:center'>Product Type</th>";
	echo "<th style='text-align:center'>Color</th>";
	echo "<th style='text-align:center'>Grade</th>";
	echo "<th style='text-align:center'>Available Quantity</th>";

	echo "</tr>";

	
	while($rec=mysqli_fetch_array($rows))
	{		
		echo "<tr>";
		echo "<td align=center><font color=black size=5px face=\"Monotype Corsiva\">".$rec[0]."</font></td>";
		echo "<td align=center><font color=black size=5px face=\"Monotype Corsiva\">".$rec[1]."</font></td>";
		echo "<td align=center><font color=black  size=5px face=\"Monotype Corsiva\">".$rec[2]."</font></td>";
		echo "<td align=center><font color=black size=5px face=\"Monotype Corsiva\">".$rec[4]."</font></td>";
		echo "<td align=center><font color=black size=5px face=\"Monotype Corsiva\">".$rec[3]."</font></td>";
		echo "<td align=center><font color=black size=5px face=\"Monotype Corsiva\">".$rec['quan']."</font></td>";
		echo "</tr>";
	}
	echo "</table></center>";
	
	
	?>
