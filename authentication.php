<?php

session_start();
require('db_connect.php');

if( isset($_POST['username']) AND (isset($_POST['password'])))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$_SESSION['log'] = false;
	
	$query = "SELECT * FROM `customers` WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($connection, $query) or die (mysqli_error($connection));
	$count = mysqli_num_rows($result);
	
	if($count==1)
	{
		$_SESSION['username'] = $username;
		$_SESSION['log'] = true;
	}
	else
	{
		$fmsg = "Invalid Login Credentials";
	}
}
if( isset($_SESSION['username']))
{
	$username = $_SESSION['username'];
	echo '<div align="center"><p style="color:#00B4FF; font-size: 25px;"><b>You are now logged in.</b></p></div>';
	echo "<br>";
	echo '
	<script type="text/javascript">
		function redirect()
		{
			window.location="index.php";
		}
		setTimeout(redirect, 2000);
	</script>
	';

}
else{
	header("Location: login.php");
}




























?>