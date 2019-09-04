
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
    <a href="logout.php" id="logout">Logout</a>
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
    
    <div align="center" border="1px solid black">
    	<h3>Login</h3>
    	<form method="post" action="authentication.php">
    		<table>
    			<tr>
    				<td><label>Username:</label></td>
    				<td><input type="text" name="username" 
    					id="username"/></td>
    			</tr>
    			<tr>
    				<td><label>Password:</label></td>
    				<td><input type="password" name="password" 
    					id="password"/></td>
    			</tr>
    		</table>
    		<input type="submit" value="Login" class="realbutton"/>
    	</form>
    	<br>
    	<br>
    	<a href="register.php">
    		<input type="button" value="Register" formaction="regsiter.php" class="realbutton">
    	</a>
    </div>
    <br>
    <br>
    <hr />
    <footer>sdfsdfdsf</footer>
</body>
</html>
