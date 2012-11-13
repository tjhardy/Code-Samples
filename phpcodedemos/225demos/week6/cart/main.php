<?php
session_start();
error_reporting(E_ALL);

// add the connection file so the script can use the connection object to 'talk' to the db
include("./inc/conn.php");

$pageheader = <<<BOP
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title> User Account Main </title>
 </head>
 <body>

BOP;

$pagefooter = <<<EOP
 </body>
</html>

EOP;

// check their login status in order to customize the page view
if (!isset($_SESSION['loggedin']) || ($_SESSION['loggedin'] != true))
	{
		// messages to display if they are not logged in
		$uname = "Valued Customer<br/></br>";
		$msg = "Welcome, " . $uname;
			
			// message to display if they tried to log in and failed
			if (isset($_GET["status"]))
			{
				if ($_GET["status"] == "baduser") 
				{
					$msg .= "<font color='red'>Error: That account does not exist or your password was incorrect.</font><br/>";
				}
			}
		$msg .= "Please <a href='login.php'>Log In</a> or <a href='accountadd.php'>Create an Account</a>";
	}
else
	{
		// message to display if they ARE logged in
		$sqlgetaccount = "SELECT * FROM users WHERE user_id=" . $_SESSION['user_id'] ;
		$result = $conn->query($sqlgetaccount);
		
		if (($row_data = $result->fetch_assoc()) !== NULL)
		{
		$uname = $row_data["user_name"];
		}
		$msg = "<b>Welcome, " . $uname . "!</b>";
		
		// message to display if the account has just been updated
		  if (isset($_GET["status"]))
			{
				if ($_GET["status"] == "updated") 
				{
					$msg .= "<br/><font color='red'>Your account information has been successfully updated.</font>";
				}
			}
		// offer options to edit or delete their account
		$msg .= "<br/><br/><a href='accountedit.php'>Edit Your Account</a>";
		$msg .= "<br/><a href='accountdel.php'>Delete Your Account</a><br/>";
	}

// assemble page view
echo $pageheader;
echo $msg;
echo $pagefooter;
 
?>