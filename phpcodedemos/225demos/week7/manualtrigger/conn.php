<?php

// suppress normal human-unfriendly errors using '@'
// change the string below to reflect your database settings
$conn = @new mysqli('localhost','username','userpass','dbname');

// catch and count errors and return alerts
if (mysqli_connect_errno() !=0)
{
  trigger_error('IT MUST BE A MONDAY...  (*SIGH*) ...because there appears to be an error in this script...',E_USER_WARNING);
}

?>