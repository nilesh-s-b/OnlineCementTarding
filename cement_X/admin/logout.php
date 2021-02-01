<?php
session_start();
unset($_SESSION['id']);
header("refresh:3;url=login.php");
echo "<h1> Log out Successfully.......";
?>