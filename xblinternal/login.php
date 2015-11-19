<?php
//basic init block
$server = "localhost";
$user = "root";
$pass = "";
$db = "server";
$connection = mysqli_connect($server, $user, $pass, $db);

//Error Handling block
if(mysqli_connect_errno)
{
	echo mysqli_connect_error(). "Failed to connect to the database. Please contact the server administrator.";
}

//User login block
if(isset($_POST['login']))
{
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$password = mysqli_real_escape_string($connection, $_POST['pass']);
	$select_user_query = "select * from where user_email = '$email' AND user_password = '$password'";
	$run_user_query = mysqli_query($connection, $select_user_query);
	$return_user = mysqli_num_rows($run_user_query);
	
	//User validation
	if($return_user > 0)
	{
		$_SESSION['user_email'] = $email;
		echo "<script>window.open('home.php','_self')</script>";
	}
	else
	{
		echo "<script>alert('Email or password is incorrect')</script>";
	}
}
?>