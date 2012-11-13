<?php
// add the connection file so the script can use the connection object to 'talk' to the db
include("./inc/conn.php");

$sqladdaccount = "INSERT INTO users(user_name,user_pass,user_level) VALUES('" . $_POST["user_name"] . "','" . $_POST["user_pass"] . "','" . $_POST["user_level"] . "')";

$result = $conn->query($sqladdaccount);

// we can choose also to automatically log them in, but for this app we won't
header("Location: login.php");
?>