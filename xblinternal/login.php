<?php
if(!session_is_registered('loginid') || !session_is_registered('username'))
{
	//If the user is not logged in
	{
		//Get username and password from login form
		//remove all html and php, then make a md5 hash
		//This is to stop a SQL injection attack
		$user = strip_tags($_POST['username']);
		$pass = md5(strip_tags($_POST['password']));
		//search in database
		$query = sprintf("SELECT loginid FROM userlogin WHERE username = '%s' AND password = '%s' LIMIT1;",
			mysql_real_escape_string($user), mysql_real_escape_string($pass));
		//0 is incorrect login info
		//1 is correct login info
		//Anything greater than one means there are many users with the same password and username
		//So the login will fail
		if(mysql_num_row($result) != 1)
		{
			//Wrong login error handling
			echo "Wrong username or password!";
			//return to loginform
			include "loginform.php";
		}
		else
		{
			//Successful login
			$row = mysql_fetch_array($result);
			//Save user information for later sessions
			$_SESSION['loginid'] = $row['loginid'];
			$_SESSION['username'] = $user;
			show_userbox();
		}
	}
	else
	{
		//Show loginform at the start
		include "loginform.php"
	}
}
else
{
	//User is already loggedin
	show_userbox();
}
?>