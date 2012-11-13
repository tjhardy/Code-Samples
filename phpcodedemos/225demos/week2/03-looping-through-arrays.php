<?php

echo "<h2>Looping Through Arrays</h2>";

echo "First, we create an array and fill it with 6 drinks: Coffee, Cafe au Lait, Mocha, Espresso, Americano, and Latte...<br/><br/>";

// creates an array named drinks, and fills it with 6 values as a numerically indexed array

$drinks = array("Coffee", "Cafe au Lait", "Mocha", "Espresso",
                 "Americano", "Latte");


//  looping through our array, one element at a time, using for-each

echo "<b>Iterating with a 'for-each' loop:</b><br/><br/>";

//  foreach takes two parameters - the name of the array you are looping through
//  and the temporary name you want each element to be called as it loops through
//  so you can use it within the foreach loop

echo "We serve: ";
echo "<ul>";

foreach ($drinks as $drink)
  {
    echo "<li> $drink </li>";
  }

echo "</ul>";



echo "<b>Iterating with 'for' loop and an index counter variable</b><br/><br/>";
echo "We serve: ";
echo "<ul>";

// get a count, because we'll need it for this version
$numelem = count($drinks);

// first parameter is our index, set to an initial value
// second is the condition to watch for to break the for loop
// third is incrementing our index counter, or we'll be here forever!
for ($i = 0; $i < $numelem; $i++)
  {
    echo "<li> " . $drinks[$i] . " </li>";
  }

echo "</ul>";



echo "<h3>Accessing arrays of arrays</h3>";
echo "Earlier we created an array of arrays for special calendar datas.  Let's access those values now...";

//  create an associative array to hold information about a particular date
$event1 = array("date" => "January 1, 2011",
			   "event" => "New Year's Day!",
               "time" => "all day", 
			   "place" => "Time's Square");
$event2 = array("date" => "February 14, 2011",
			   "event" => "Valentine's Day!",
               "time" => "all day", 
			   "place" => "whereever");
$event3 = array("date" => "April 1, 2011",
			   "event" => "April Fool's Day!",
               "time" => "all day", 
			   "place" => "on the Moon");

//  add all the associative arrays above to a numerically indexed array
$calendar = array($event1,$event2,$event3);

//print out the full array
echo "<br/><b>Calendar Array: ";
print_r($calendar);
echo "</b><br/><br/>";


echo "Accessing these values is not too difficult.  You just need to use a dual key.  The first key is the numeric index of the event you want to access, and the second is the associative key for the information you need about that particular event.  So, to get a simple list of events from our main calendar array, we can do the following:  </br><ul>";

// get a count, because we'll need it 
$numevents = count($calendar);

// first parameter is our index, set to an initial value
// second is the condition to watch for to break the for loop
// third is incrementing our index counter, or we'll be here forever!
for ($i = 0; $i < $numevents; $i++)
  {
	// notice the dual index key in this version
	// the first index - [i] is the index for the calendar array for each event
	// the second index - ['event'] - gives us the name of that holiday or event
    echo "<li> " . $calendar[$i]['event'] . " </li>";
  }

echo "</ul>";

?>