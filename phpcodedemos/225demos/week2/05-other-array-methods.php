<?php
// finding out how many elements are in our array using the count method

echo "<h2>Other Array Methods</h2>";

echo "First, we create an array and fill it with 6 drinks: Coffee, Cafe au Lait, Mocha, Espresso, Americano, and Latte...";

// creates an array named drinks, and fills it with 6 values as a numerically indexed array

$drinks = array("Coffee", "Cafe au Lait", "Mocha", "Espresso",
                 "Americano", "Latte");

echo "<h3>Count</h3>";
echo "Now, let's get a <i>count</i>...<br/>";

$elems = count($drinks);

// printing out the number of array elements to the screen

echo "<b>The array \$drinks has $elems elements<br/></b>";

echo "<h3>Array_Merge</h3>";

echo "Now, let's create another array and fill it with 6 foods: Donut, Danish, Yogurt, Banana, Scone and Muffin...<br/><br/>";

// creates an array named drinks, and fills it with 6 values as a numerically indexed array

$foods = array("Donut", "Danish", "Yogurt", "Banana",
                 "Scone", "Muffin");

echo "And then let's use <i>array_merge</i> to combine them.  First, let's see what's in our two arrays: <br/><br/><b>";
  echo "Array 1 (drinks): ";
  print_r($drinks) ;
  echo "<br/>";
  echo "Array 2 (foods): ";
  print_r($foods) ;
  echo "</b><br/><br/>";


echo "Now, let's combine our two arrays into one called 'breakfast' and print out the new array...<br/><br/>";

$breakfast = array_merge($drinks,$foods);

echo "<b>Array 3 (breakfast): ";

  print_r($breakfast) ;
  echo "</b>";


  echo "Array 1 (drinks): ";
  print_r($drinks) ;
  echo "<br/>";
  echo "Array 2 (foods): ";
  print_r($foods) ;
  echo "</b><br/><br/>";


$foods = array("C12", "C32", "C06", "C02",
                 "C4", "C8");


$drinks = array("Coffee", "Cafe au Lait", "Mocha", "Espresso",
                 "Americano", "Latte");

$mess = array_combine($foods,$drinks);

  echo "</b><br/><br/>";
 print_r($mess) ;
  echo "</b><br/><br/>";
?>