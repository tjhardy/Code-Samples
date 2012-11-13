<?php

// setting up our lowercase name array to process within our function
$nameArray = Array("Jason","James","Ray","Russ","Steven","Justin A","Garrett","Justin L");

// setting up function to accept array as a parameter
function upperCase($nameArray) {

// setting up outgoing array for processed items
$uCaseNameArray = Array();

// looping through incoming array, changing case, writing to outgoing array
foreach ($nameArray as $name)
  {
	$uCaseNameArray[] = strtoupper($name);
  }

  // returning outgoing array
  return $uCaseNameArray;
}

// setting up new array to hold values returned from function
$newNameArray = upperCase($nameArray);

echo "Printing original array: ";
print_r($nameArray);

echo "<br/><br/>";

echo "Printing returned array: ";
print_r($newNameArray);

echo "<br/><br/>";

?>