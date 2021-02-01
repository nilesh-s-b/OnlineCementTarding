<html>
<style>
.btn1
{
	width:150px;	
	height:35px;
	border-radius:20px;
	color:white;
	background-color:black;
	font-family:georgia;
	font-size:20px;
	text-align:center;
	
}	
.btn2
{
	width:150px;	
	height:35px;
	border-radius:20px;
	color:white;
	background-color:black;
	font-family:Bradley Hand ITC;
	font-family:georgia;
	font-size:20px;
}
</style>
<?php
include("Navbarmenu.html");
?>
<form method=POST >
<table cellpadding="5px" cellspacing="5px" align=center frame=box>
<th align=center colspan=2><span style='font-size:30px;color:white'>LOGIN</th> 
<tr><td><span style='font-size:20px;color:white'>UserName&nbsp&nbsp&nbsp&nbsp</td><td><input type=text name=un></td></tr>
<tr><td><span style='font-size:20px;color:white'>Password&nbsp&nbsp&nbsp&nbsp</td><td><input type=password name=pwd></td></tr>
<br><br><br>
<tr><td><input type=submit value="Login" class=btn1 name="sub">
<td><input type=reset value="Clear" class=btn2></tr>
<tr><td colspan=2 align=center>
<input type=submit value="Sign Up" class=btn1 name="register">
</table>		
</form>
</html>

<?php

if(isset($_POST['sub']))
{
		$un=$_POST['un'];
		$pwd=$_POST['pwd'];
		
		if(empty($un) || empty($pwd))
		{
			echo "<font color='red' size=6>Please Enter username and password</font>";
		}
		else
		{
			$qwe=mysqli_connect("localhost","root","toor");
			
			$x=mysqli_select_db($qwe,"cement");
			
			$result=mysqli_query($qwe,"select usn,cpwd from userreg where usn='$un' and cpwd='$pwd'");
			
			$count=mysqli_num_rows($result);
			
			if($count>=1)
			{
				session_start();
				$_SESSION['uid']=$un;
			header("location:purchaseorder.php");
			}			
			else
			{
				$err="<font color='red' size=6>Login failed</font>";
				echo $err;
			}	
		}
}	
if(isset($_POST['register']))
	header("Location:custreg.php");
?>
