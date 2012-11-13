<?php
// try and catch example 

function get_day_of_week($in_day)
{
  if (!is_int($in_day))
	 throw new Exception('Day value is not an Integer');
  if ($in_day < 0 || $in_day > 6)
	 throw new Exception('Day value must be between 0 and 6');

  switch ($in_day)
	{
	  case 0:
	    echo "The day you picked is Sunday";
	  case 1:
	    echo "The day you picked is Monday";
	  case 2:
	    echo "The day you picked is Tuesday";
	  case 3:
	    echo "The day you picked is Wednesday";
	  case 4:
	    echo "The day you picked is Thursday";
	  case 5:
	    echo "The day you picked is Friday";
	  case 6:
	    echo "The day you picked is Saturday";
	}
}

$dayvalue = "not a number!";

try
{
get_day_of_week($dayvalue);
}
catch (Exception $e)
{
 echo 'An Exception was thrown: ' . $e->getMessage() . '<br/>';
 echo 'The Exception Error Code was: ' . $e->getCode() . '<br/>';
 echo 'The Exception Error File was: ' . $e->getFile() . '<br/>';
 echo 'The Exception Error Line was: ' . $e->getLine() . '<br/>';
 echo 'The Exception Stack Trace is an object of type: ' . $e->getTrace() . '<br/>';
 echo 'The Exception Stack Trace String was: ' . $e->getTraceAsString() . '<br/>';
}
?>