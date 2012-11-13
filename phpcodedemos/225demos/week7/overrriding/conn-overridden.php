<?php

// new function that overrides normal error handling function
// the parameters it accepts are passed to it automatically by the system
// mimicking the original error handler in values and placement in the list
function new_error_handler($errorno,$errstr,$errfile,$errline,$errcontext)
{
// set up an array with the error numbers as the key and custom error message types
// so we can tweak the error messages to be a bit more human friendly
$errors = array(
  2 => 'Warning Error',
  8 => 'Notice Error',
  256 => 'User Error',
  512 => 'User Warning',
  1024 => 'User Notice',
);

// initialize the error type to an empty string which we will fill later
$err_type = '';


// loop thorugh array, looking for a match to our error number
// when we find a match, add the custom error type message above to the err_type string
foreach ($errors as $value => $errstring)
{
  if (($errorno & $value) !=0)
	{
		$err_type .= $errstring;
	}
}

// use the custom error type string and the other stuff passed in 
// to construct a suitably apologetic message for the user...
echo "<b><font color='blue'>I'm really, really very sorry (see, I'm actually BLUE over this!) but I regret to inform you that an error has occurred.</b></font><br/><br/>";
echo "The error is a: <b>" . $err_type . "</b>.<br/>";
echo "The error is on line: <b>" . $errline . "</b>, <br/>";
echo "located in this file: <b>" . $errfile . "</b>.<br/><br/>";
}

  set_error_handler('new_error_handler');
  
// database connection string, deliberately bungled so we can play with errors...
// use the @ to suppress normal human-unfriendly errors so we can handle them ourselves
$conn = @new mysqli('localhost','blah','blah','blah');

 $conn -> close();
?>