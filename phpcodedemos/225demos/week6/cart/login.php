<?php
session_start();
error_reporting(E_ALL);

// if they have already logged in...
if (isset($_SESSION['loggedin']) && ($_SESSION['loggedin'] == true))
{
  //move them on to the main page if they have somehow found their way back here
  header("Location: main.php");
}
else
{

$page = <<<EOC
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title> Please Log In </title>
 </head>
 <body>
  <form action="logincheck.php" method="POST">
	UserName:  <input type="text" name="user_name" value=""><br/>
	Password:  <input type="text" name="user_pass" value=""><br/>
	<input type="submit" name="submmit" value="Log In">
  </form>
 </body>
</html>

EOC;

  if (isset($_GET["status"]))
	{
	 if ($_GET["status"] == "newacct") 
	 {
		echo "<font color='red'>Your new account has been created.  Please log in now.</font><br/><br/>";
	 }
    }

echo $page;
}	 
?>