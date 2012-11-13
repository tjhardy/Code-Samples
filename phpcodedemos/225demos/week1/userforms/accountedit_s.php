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

$sqleditaccount = "UPDATE users SET user_pass='" . $_POST["user_pass"] . "', user_name='" . $_POST["user_name"] . "', user_level=" . $_POST["user_level"] . " WHERE user_id=" . $_SESSION['user_id'] ;

$result = $conn->query($sqleditaccount);
}

header("Location: main.php?msg=updated");
?>