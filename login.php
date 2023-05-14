<?php
session_start();
$username = $_SESSION['username'];
$password =  $_SESSION['password'];
//print_r($username);
//echo"<br>";
//print_r($password);
if(($username= "user") && ($password="123"))
{
	echo "Welcome ".$username;
}
else
{
	echo "Try";
}

session_destroy ();
?>