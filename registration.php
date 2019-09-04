<?php

require('db_connect.php');

if(
isset($_POST['username']) AND
isset($_POST['password']) AND
isset($_POST['fname']) AND
isset($_POST['lname']) AND
isset($_POST['email'])
)
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
}
else{
	echo '<div align="center"><p style="color:#00B4FF; font-size: 25px;"><b>Data not entered.</b></p></div>';
	echo "<br>";
	echo '
	<script type="text/javascript">
		function redirect()
		{
			window.location="register.php";
		}
		setTimeout(redirect, 2000);
	</script>
	';
	exit();
}
$check1 = ("SELECT * FROM customers");
$result1 = mysqli_query($connection, $check1);

$register = "INSERT INTO `customers` (`username`, `password`, `fname`, `lname`, `email`)
VALUES ('$username', '$password', '$fname', '$lname', '$email')";


while($row = mysqli_fetch_assoc($result1))
{
		if($row['username']==$username)
		{
			echo '<div align="center"><p style="color:#00B4FF; font-size: 25px;"><b>Username already taken</b></p></div>';
		echo "<br>";
		echo '
		<script type="text/javascript">
			function redirect()
			{
				window.location="register.php";
			}
			setTimeout(redirect, 2000);
		</script>
		';
		exit();
		}
	}

$reg = mysqli_query($connection, $register);

$result2 = mysqli_query($connection, $check1);

while($row = mysqli_fetch_assoc($result2))
{
	if($row['username']==$username)
		{
			echo '<div align="center"><p style="color:#00B4FF; font-size: 25px;"><b>You have been successfully registered.</b></p></div>';
		echo "<br>";
		echo '
		<script type="text/javascript">
			function redirect()
			{
				window.location="login.php";
			}
			setTimeout(redirect, 2000);
		</script>
		';
		exit();
		}
}

?>