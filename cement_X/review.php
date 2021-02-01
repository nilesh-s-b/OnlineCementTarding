<html>
<body text=white>
	<center>
	<?php
	$c=mysqli_connect("localhost","root","toor");
	mysqli_select_db($c,"cement");
	$rows=mysqli_query($c,"select * from review order by rate desc");	
	echo "<table border=0 style='border-collapse:collapse;padding:10px' 	class=table width=50% cellpadding=20>";
	echo "<tr ><td colspan=3 align=center> <h2 style='color:white'>Our Client Says</h2></tr>";
	$i=0;
	while($r=mysqli_fetch_array($rows))
	{
		$str=$r[5];
		echo "<tr><td><div style='border:thin double white;border-radius:50px;'>
<table> ";
		if(file_exists($str))
		{
			echo "<tr><td rowspan=3 width=120px><img src=$str height=100 width=100 style='border-radius:50%'>";
		}
		else
			echo "<tr><td rowspan=3 width=120px><img src='img/human.png' height=100 width=100 style='border-radius:50%'>";
		echo "	
<td width=140px colspan=2><b> $r[0]</tr>
<tr><td width=140px colspan=2> $r[4]</tr>
<tr><td width=140px colspan=2>";
		for($i=1;$i<=$r[6];$i++)
		{
			echo '<img src=img/star.png height=20 width=20>';
		}

		echo "</tr>
			</table>
			</div>
			</tr>";
	}

	echo "</table>";
?>
	</div>
	</div>
	</div>
	</div>
	
</body>
</html>
