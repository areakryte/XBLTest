<!DOCTYPE html>
<?php
session_start();
?>
<head>
	<title> XBL Internal Login </title>
</head>
<body>

	<h1 align = "center" >XBL Internal Login</h1>

	<form action = "login.php" method = "post">
	<table width = "500" align = "center" bgcolor = "skyblue">
	<tr align = "center">
		<td colspan = "3" >
			<h2>User Login</h2>
		</td>
	</tr>
	
	<tr>
		<td align = "right">
			<b>Email</b>
		</td>
		<td>
			<b>
				<input type = "text" name = "email" required = "required"/>
			</b>
		</td>
	</tr>
	
	<tr>
		<td align = "right">
			<b>Password</b>
		</td>
		<td>
			<b>
				<input type = "password" name = "pass" required = "required"/>
			</b>
		</td>
	</tr>
	
	<tr align = "center">
		<td colspan = "3">
			<input type = "submit" name = "login" value = "Login"/>
		</td>
	</tr>

</body>
</html>