<?php
session_start();
error_reporting[E_ALL];

// if they have NOT already logged in...
if (!isset($_SESSION['loggedin']) || ($_SESSION['loggedin'] != true))
{
  //move them on to the login page
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

echo $pageheader;

// grab cust id from session, get account info
$sqlgetaccount = "SELECT * FROM users WHERE user_id=" . $_SESSION['user_id'] ;

$result = $conn->query($sqlgetaccount);

	if (($row_data = @$result->fetch_assoc()) !== NULL)
	{
	echo "<form action='accountedit_s.php' method='POST'>";
	echo "UserName: " . $row_data["cust_uname"] . "  <br/>";
	echo "Password: <input type='text' name='cust_pass' value='" . $row_data["cust_pass"] . "'><br/>";
	echo "Address: <input type='text' name='cust_address' value='" . $row_data["cust_address"] . "'><br/>";
	echo "City: <input type='text' name='cust_city' value='" . $row_data["cust_city"] . "'><br/>";
	echo "State: <input type='text' name='cust_state' value='" . $row_data["cust_state"] . "' size='3'><br/>";
    echo "<input type='submit' name='submit' value='Update'>";
    echo "</form>";
	}
	echo $pagefooter;
}
?>