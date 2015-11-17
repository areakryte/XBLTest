<?php

//Initalization block
define ("HOST", "192.168.1.7:80");
define ("DBUSER", "root");
define ("PASS", "");
define ("DB", "server");

//MySQL Connector
$connection = mysql_connect(HOST,DBUSER, PASS);
if(!$connection)
{
	//Kill connection script
	die('Connection has failed! <br/ >Please contact the site\'s administrator.');
}
$database = mysql_select_db(DB);
if(!$database)
{
	//Connection could not be made. Kill connection script
	die('COuld not connect to database! </ >Please contact the site\'s administrator.');
}
?>