<?php
session_start();
// see if they have already logged in...
if (!isset($_SESSION['loggedin']) || ($_SESSION['loggedin'] != true))
{
  //if not, move them to the login page
  header("Location: login.php");
}
else
{
// add the connection file so the script can use the connection object to 'talk' to the db
include("./inc/conn.php");

$sqldelaccount = "DELETE FROM lab7cust WHERE cust_id=" . $_SESSION['cust_id'] ;

$result = @$conn->query($sqldelaccount);

//destroy/unset session
$_SESSION['loggedin'] = false;
$_SESSION['cust_id'] = "";
session_destroy();

}

header("Location: register.php");
?>