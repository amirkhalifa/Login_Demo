<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<form action="login_or_signUP.php" method="POST">
		<center><img src="images/seu_logo.png" id="a"></center> 
		<table>
			<tr>
			<td>
				<input type="text" name="user" placeholder="id/email">
			</td>
			</tr>
			<tr>
				<td>
					<input type="password" name="pass" placeholder="password">
				</td>
			</tr>
			<br>
			<br>
			<tr>
				<td>
					<a href="home.php">
						<input type="button" name="user" value="login">
					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="signUp.php">
						<input type="button" name="register" value="signUp">
					</a>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>