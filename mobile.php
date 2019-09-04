<?php
$servername = "localhost";
$username = "sameer";
$password = "nvidia1024";
$dbname = "envato";

$authenticated = false;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT *q FROM vehicles";
$result = mysqli_query($conn, $sql);

?>



<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<title>Envato Mobile Store</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <a href="index.php">
    <img src="logo.png"  height="200" width="400">
    </a>
    <h1 id="title">Envato Mobile</h1>
    <a href="login.php" id="login">Login</a>
    <br />
    <br />
    <hr />
    <div align="center">
    <form>
        <input type="text" value="Search"id="">&nbsp;&nbsp;&nbsp;&nbsp;<input id="button1" type="button" value="Search" />
    </form>
    </div>
    <br/>
    <br/>
    <div align="center">
        <a class="button" href="">Mobile</a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a class="button" href="">Accessories</a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a class="button" href="">About Us</a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a class="button" href="">Contact Us</a>
    </div>
    <br/>
    <hr />
    
    
    <p>hello</p>
    <div>
    	<div>
    		<div>
    			<table border="1">
    			<?php if(mysqli_num_rows($result)>0): ?>
    				<?php while($row = mysqli_fetch_assoc($result)):?>
    					<tr>
    						<td><?php $row['name'] ?>/td>
    						<td><?php $row['price'] ?></td>
    						<td><?php  $row['quantity'] ?></td>
    					</tr>
    				<?php endwhile; ?>
    			<?php endif; ?>
    			</table>
    		</div>
    	</div>
    </div>
    
    
    
    
    
    
    <footer>sdfsdfdsf</footer>
</body>
</html>
