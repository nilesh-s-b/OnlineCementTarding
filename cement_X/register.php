<?php
	$fn=$_POST['fn'];
	$ln=$_POST['ln'];
	$mob=$_POST['mob'];
	$email=$_POST['email'];
	$usn=$_POST['usn'];
	$cpwd=$_POST['cpwd'];
	$addr=$_POST['addr'];
	
	$err=$qry=$nameerr="";
	
	$connect=mysqli_connect("localhost","root","toor")
			or die ("connection ERROR");
	$db=mysqli_select_db($connect,"cement")
			or die("DB selection ERROR");
		
	echo "<center><font color=white>ho ".$fn.$ln."</font>";

	function NewUser($connect,$fn,$ln,$mob,$email,$usn,$cpwd,$addr)
	{
		$inNew="In NewUser";
		echo "<i><font face='Verdana' size='3' color=green>".$inNew."</font></i><br>";

		$data=mysqli_query($connect,"insert into userreg values('','$fn','$ln','$mob','$email','$usn','$cpwd','$addr')");
		if($data)
		{
			$regcomp="YOUR REGISTRATION IS COMPLETED...";
			echo "<br><i><font face='Verdana' size='3' color=green>".$regcomp."</font></i><br>";
		}
		else
		{
			echo "<br> <i><font face='Verdana' size='3' color=green> Something Problem in registration.........
				 </font></i><br>";
		}
	}
	
	$query = mysqli_query($connect,"SELECT * FROM userreg");
			
	while($row = mysqli_fetch_array($query) )
	{
		$u=$row['usn'];
		$e=$row['email'];

		if($u == $usn)
		{
			$unameExist="SORRY...USERNAME ALREADY REGISTERED.";
			echo "<br><i><font face='Verdana' size='3' color=red>".$unameExist."</font></i><br>";
			$flag++;
		}
		if($e == $email)
		{
			$emailExist="EMAIL ALREADY REGISTERED.";
			echo "<br><i><font face='Verdana' size='3' color=red>".$emailExist."</font></i><br>";
			$flag++;
		}
	}
			
	if($flag==0)
	{
		$notExist="Adding New User";
		echo "<br><i><font face='Verdana' size='3' color=green>".$notExist."</font></i><br>";
		NewUser($connect,$fn,$ln,$mob,$email,$usn,$cpwd,$addr);
	}

?>

			
