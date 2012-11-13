<?php
session_start();
error_reporting(E_ALL);

$page = <<<EOC
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title> Delete My Account </title>
 </head>
 <body>
  Are you sure you want to delete your account?  This cannot be undone.  <br/><br/>
  Yes, <a href="accountdel_s.php">please delete my account</a>.  <br/>
  No, <a href="main.php">take me back to the main account page</a>.  <br/>
  </form>
 </body>
</html>

EOC;

echo $page;
?>