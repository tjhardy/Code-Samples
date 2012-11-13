<?php

// PHP time functions

echo "<h3>PHP Time Functions</h3>";

// get our basic PHP time stamp using time()
$now = time();

echo "The current time is: " . $now . ".<br/><br/>";

echo "The current time using the date function set to 'r' is: " . date('r',$now) . ".<br/><br/>";

echo "The current time as an Array is: ";

// print this timestamp out as a formatted string
print_r(getdate($now));

echo ".<br/><br/>";

echo "To extract portions of the getdate() Array, use it just like a normal associative Array.<br/>";

// put this basic time into an array, so we can pull out its components
$datearray = getdate($now);

// pull out month, day of month, and year
$month = $datearray['month'];
$mday = $datearray['mday'];
$year = $datearray['year'];

echo "The current month is: " . $month . ".<br/>";
echo "The current day of the month is: " . $mday . ".<br/>";
echo "The current year is: " . $year . ".<br/><br/>";

echo "You can also assemble a basic date/time from scratch using the mktime() function.<br/>";
echo "For example, [15,23,00,1,1,1990] when run through mktime() returns: ";

// use mktime() to create a timestamp from its various basic components
$mktime = mktime(15,23,00,1,1,1990);
echo $mktime;

echo "<br/><br/>";
echo "You can then format that using the date() function: ";

// run that new timestamp through date() to make it readable
$mktimereadable = date('r',$mktime);
echo $mktimereadable;

echo "<br/><br/>";

echo "You can also have PHP attempt to format a string as a date using the strtotime() function.<br/>";
echo "For example, 12/21/2009 when run through strtotime() returns: ";

// use strtotime to attempt to convert the string
$strtotime1 = strtotime('12/21/2009');
echo $strtotime1;

echo "<br/><br/>";

// run it through the date() function to make it readable
echo "Which when run through date() returns: ";
$strtotime1readable = date('r',$strtotime1);
echo $strtotime1readable;

echo "<br/><br/>";

echo "strtotime() can also recognize some keywords.<br/>";
echo "For example, 'yesterday' when run through strtotime() returns: ";

// use strtotime to attempt to convert the string
$strtotime2 = strtotime('yesterday');
echo $strtotime2;

echo "<br/><br/>";

echo "Which when run through date() returns: ";

// run it through the date() function to make it readable
$strtotime2readable = date('r',$strtotime2);
echo $strtotime2readable;
?>