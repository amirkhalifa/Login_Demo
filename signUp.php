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
					<input type="text" name="user" placeholder="enter your first name">
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="user" placeholder="enter your last name">
				</td>
			</tr>
			<tr>
				<td>
					<input type="email" name="pass" placeholder="enter your email/phone">
				</td>
			</tr>
			<tr>
				<td>
					<input type="password" name="pass" placeholder="enter password">
				</td>
			</tr>
			<tr>
				<td>
					<input type="password" name="pass" placeholder="confirm password">
				</td>
			</tr>
			<br>
			<br>
			<tr>
				<td>
					<input type="button" name="user" value="login">
				</td>
			</tr>
			<br>
			<br>

			<tr>
				<td>
					<a href="signUp.php"><input type="button" name="register" value="signUp"></a>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>