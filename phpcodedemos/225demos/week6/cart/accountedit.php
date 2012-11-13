<?php
session_start();
error_reporting(E_ALL);

// check status of login to customize page view
if (!isset($_SESSION['loggedin']) || ($_SESSION['loggedin'] != true))
{
  //if they are not logged in, move them on to the login page
  header("Location: login.php");
}
else
{
// add the connection file so the script can use the connection object to 'talk' to the db
include("./inc/conn.php");

$pageheader = <<<BOP
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title> Edit Account </title>
 </head>
 <body>
    <h2>Edit My Account</h2>
BOP;

$pagefooter = <<<EOP
 </body>
</html>

EOP;

// if they are logged in, assemble form by grabbing cust id from session, get account info
$sqlgetaccount = "SELECT * FROM users WHERE user_id=" . $_SESSION['user_id'] ;

$result = $conn->query($sqlgetaccount);

	if (($row_data = @$result->fetch_assoc()) !== NULL)
	{
	$form = "<form action='accountedit_s.php' method='POST'>";
	$form .= "UserName: <input type='text' name='user_name' value='" . $row_data["user_name"] . "'><br/>";
	$form .= "Password: <input type='text' name='user_pass' value='" . $row_data["user_pass"] . "'><br/>";
    $form .= "<input type='submit' name='submit' value='Update'>";
    $form .= "</form>";
	}

// assemble page view 	
echo $pageheader;
echo $form;	
echo $pagefooter;
}
?>