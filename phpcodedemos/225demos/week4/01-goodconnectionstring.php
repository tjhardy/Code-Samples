<?php
error_reporting(E_ALL);

// suppress normal human-unfriendly errors using '@' in front of the 'new' 
// but don't do it until you are sure it's working!
// change the string below to reflect your database settings
$conn = new mysqli('localhost','tjhardy','t1g3r1','tjhardy');


// catch and count errors and return alerts
// 'connect_error()' returns the last connection type error, if there is one
if (mysqli_connect_errno() !=0)
{
  // returns the descriptive string associated with the error
  $alert = mysqli_connect_error();
  echo "Oops! There seems to be a connection error:  " . $alert;
}
else
{
  $alert = "Connection Successful!  No errors detected - so far!";
  echo $alert . "<br/> </br/>";

  // close connection when through
  // normally this would be done at the very end of your script...
  // if you forget and do it before the end, you will close your access
  // to your database, which is not a good idea!
  $conn -> close();
}
?>