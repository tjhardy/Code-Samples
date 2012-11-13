<?php
// try and catch example 

function get_day_of_week($in_day)
{
  if (!is_int($in_day))
	 return FALSE;
  if ($in_day < 0 || $in_day > 6)
	 return FALSE;

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

$dayvalue = 9;

get_day_of_week($dayvalue);
?>