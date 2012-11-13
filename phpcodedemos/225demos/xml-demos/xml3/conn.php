<?php 
// create our connection object by filling in our connection string params
$conn = new mysqli('localhost','tjhardy','t1g3r1','tjhardy');

// 'connect_error()' returns the last connection type error, if there is one
if (mysqli_connect_errno() !=0)
{
  // returns the descriptive string associated with the error
  $alert = mysqli_connect_error();
  echo "Oops! There seems to be a connection error:  " . $alert;
}
?>