<?php
function show_userbox()
{
	//retrieve the session information
	$user = $_SESSION['username'];
	$userid = $_SESSION['loginid']
	echo "<div> id = 'userbox'>
		Welcome $user
			<ul>
				<li>
					<a href = './logout.php'> Logout </a>
				</li>
			</ul>
		</div>";
}
?>