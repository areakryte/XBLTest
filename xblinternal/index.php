<!DOCTYPE html>
<html>
<head>
<title> XBL Internal </title>
</head>
<body>

<h1>XBL Internal Site</h1>

<p>Links</p>
<a href="downloads.php">Downloads</a>
<br>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$info = "test";

$conn = new mysqli($servername, $username, $password, $info);
if($conn->connect_error)
{
	die("Connection Failed: " . $conn->connect_error);
}
echo "Success";
$conn->close();
?>

</body>
</html>