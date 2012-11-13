<?php
session_start();
error_reporting(E_ALL);

// if they have already registered and logged in...
if (isset($_SESSION['loggedin']) && ($_SESSION['loggedin'] = true))
{
  //move them on to the products page
  header("Location: main.php");
}
else
{
// add the connection file so the script can use the connection object to 'talk' to the db
include("./inc/conn.php");

$pageheader = <<<BOP
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title> Register </title>
 </head>
 <body>

BOP;

$pagefooter = <<<EOP
 </body>
</html>

EOP;

echo $pageheader;

// output registration form
	echo "<form action='accountadd_s.php' method='POST'>";
	echo "UserName: <input type='text' name='user_name' value=''><br/>";
	echo "Password: <input type='text' name='user_pass' value=''><br/>";
	echo "User Level: <select name='user_level'><option value='0'>Super Admin</option><option value='1'>Admin</option><option value='2' selected>Job Seeker</option></select><br/>";
    echo "<input type='submit' name='submit' value='Create Account'>";
    echo "</form>";
	echo $pagefooter;
}
?>