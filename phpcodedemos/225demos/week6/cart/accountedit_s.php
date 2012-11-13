<?php
session_start();
error_reporting(E_ALL);

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

// set up the sql to edit their account info
$sqleditaccount = "UPDATE users SET user_name='" . $_POST["user_name"] . "', user_pass='" . $_POST["user_pass"] . "' WHERE user_id=" . $_SESSION['user_id'] ;

$result = $conn->query($sqleditaccount);
}

// send them back to main with a success message
header("Location: main.php?status=updated");
?>