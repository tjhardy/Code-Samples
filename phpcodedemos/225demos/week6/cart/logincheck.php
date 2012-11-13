<?php
session_start();
error_reporting(E_ALL);

// add the connection file so the script can use the connection object to 'talk' to the db
include("./inc/conn.php");

// grab login, check to make sure it is valid
$logincheck = "SELECT * FROM users WHERE user_name='" . $_POST["user_name"] . "' AND user_pass = '" . $_POST["user_pass"] . "'" ;

$result = $conn->query($logincheck);

if (($row_data = $result->fetch_assoc()) !== NULL)
{
	//set session variables
	$_SESSION['loggedin'] = true;
	$_SESSION['user_id'] = $row_data['user_id'];
	//forward on to main page
	header("Location: main.php");
}
else
{
//forward on to main page with error
header("Location: main.php?status=baduser");
}
?>