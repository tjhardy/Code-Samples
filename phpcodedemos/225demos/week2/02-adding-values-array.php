<?php

echo "<h2>Adding to Arrays</h2>";
echo "<h3>Adding single values</h3>";

echo "First, we create an array and fill it with 2 car manufacturers: Ford and Honda...";

// creates an array named $cars, and fills it with 2 initial values as a numerically indexed array

$cars = array("Ford", "Honda");

  echo "And let's have a look at our initial array: <br/><b>" ;
  print_r($cars) ;
  echo "</b><br/><br/>";


  echo "Now, let's add another car maker (Chevy) to it: <br/>" ;

  $cars[] = "Chevy" ;

  echo "And let's have a look at what PHP did with our new value: <br/><b>" ;

  print_r($cars) ;
  echo "</b><br/>Looks like PHP just created the new slot and indexed it for us automagically...<br/><br/>";


  echo "Now, let's add a fourth car maker (Toyota) to it and give it an index of 10: <br/>" ;

  $cars[10] = "Toyota" ;

  echo "And let's have a look at what PHP did with our new value: <br/><b>" ;

  print_r($cars) ;
  echo "</b><br/>There's a gap in the index list (we go from 2 to 10) but PHP doesn't care!<br/><br/>";


  echo "Now, to prove PHP doesn't care, let's add a fifth car maker (Mercury) to it without a specific index number: <br/>" ;

  $cars[] = "Mercury" ;

  echo "And let's have a look at what PHP did with our new value: <br/><b>" ;

  print_r($cars) ;
  echo "</b><br/>There's a gap in the index list, but PHP just presses on and gives the next entry the value of the last plus one...<br/>";




echo "<h3>Creating and accessing arrays of arrays</h3>";
echo "Creating an single associative array with the keys date, event, time and place and adding event values to it for one event...";

//  create an associative array to hold information about a particular date
$event1 = array("date" => "January 1, 2011",
			   "event" => "New Year's Day!",
               "time" => "all day", 
			   "place" => "Time's Square");

  echo "And let's have a look at our new array: <br/><b>" ;

  print_r($event1) ;
  echo "</b><br/><br/>Great!  But this is just one event.  What if we need more?  Let's start first by creating some more arrays...<br/>";

$event2 = array("date" => "February 14, 2011",
			   "event" => "Valentine's Day!",
               "time" => "all day", 
			   "place" => "whereever");


$event3 = array("date" => "April 1, 2011",
			   "event" => "April Fool's Day!",
               "time" => "all day", 
			   "place" => "on the Moon");


echo "<br/><b>Event 1: ";
print_r($event1);
echo "</b><br/>";

echo "<br/><b>Event 2: ";
print_r($event2);
echo "</b><br/>";

echo "<br/><b>Event 3: ";
print_r($event3);
echo "</b><br/><br/>";


echo "Now we have three arrays, with three different events.  Actually, the difficult work is now done, because adding each of these arrays to a main events array is easy.<br/>";

$calendar = array($event1,$event2,$event3);

echo "<br/><b>Calendar Array: ";
var_dump($calendar);
echo "</b><br/><br/>";


?>