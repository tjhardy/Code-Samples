<?php
session_start();
error_reporting(E_ALL);

// see if they have NOT already logged in...
if (!isset($_SESSION['loggedin']) || ($_SESSION['loggedin'] != true))
{
  //if not, move them to the login page
  header("Location: login.php");
}
else
{
// add the connection file so the script can use the connection object to 'talk' to the db
include("./inc/conn.php");

$sqldelaccount = "DELETE FROM users WHERE user_id=" . $_SESSION['user_id'] ;

$result = $conn->query($sqldelaccount);

//destroy/unset session
$_SESSION['loggedin'] = false;
$_SESSION['cust_id'] = "";
session_destroy();

}

header("Location: main.php");
?>