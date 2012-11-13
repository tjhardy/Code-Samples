<?php

//  now, let's sort some arrays using built-in sorting methods

echo "<h2>Sorting Arrays</h2>";
echo "<h4>Sorting Numerically Indexed Arrays</h4>";

echo "Again, we create an array and fill it with 6 drinks: Coffee, Cafe au Lait, Mocha, Espresso, Americano, and Latte...<br/><br/>";

// creates an array named drinks, and fills it with 6 values as a numerically indexed array

$drinks = array("Coffee", "Cafe au Lait", "Mocha", "Espresso",
                 "Americano", "Latte");

//  print out our array before we mess with it

  echo "Before <i>sort</i> elements are in the order we put them into the array: <br/><b>" ;
  print_r($drinks) ;
  echo "</b><br/><br/>";

//  print out our array after we sort it using asort
  asort($drinks); 
  echo "After <i>asort</i> the elements have been re-arranged alphabetically by their values: <br/><b>" ;
  print_r($drinks) ;
  echo "</b><br/>Notice that elements have NOT been moved around into new index positions - ie, 'Americano' is still in index position 4..." ;
  echo "<br/><br/>";

//  print out our array after we sort it alphabetically
  sort($drinks); 
  echo "After <i>sort</i> the elements have again been re-arranged alphabetically by their values: <br/><b>" ;
  print_r($drinks) ;
  echo "</b><br/>Notice this time that elements have actually been moved around into new index positions - ie, 'Americano' is no longer in index position 4, but now is in index position 0..." ;
  echo "<br/><br/>";


//  now, sort it in reverse order and print it out
  rsort($drinks); 
  echo "Now, sort in reverse order with <i>rsort</i>: <b><br/>" ;
  print_r($drinks) ;
  echo "</b><br/><br/>";


echo "<h4>Sorting Associatively Indexed Arrays</h4>";

echo "This time, let's work with an associatively indexed array called \$computer, filled with the key value pairs:<br/>  processor = Muncheron 6000, memory = 2048, HDD1 = 80000, and graphics = NTI Monster GFI q9000...<br/><br/>";


//  instantiate a new array, but this one is an associative array

$computer1 = array("processor" => "Muncheron 6000",
                    "memory" => 2048, "HDD1" => 80000,
                    "graphics" => "NTI Monster GFI q9000");

$computer2 = array("processors" => "Muncheron 9000");

$computer = array_merge($computer2,$computer1);
  print "<h3> array merge</h3>";
  print_r($computer) ;
  echo "</b><br/><br/>";


//  print it out before we mess with it
  echo "Before using <i>sort</i>, our new array looks like this: <br/><b>" ;
  print_r($computer) ;
  echo "</b><br/><br/>";

//  print out our array after we sort it using asort
  asort($computer); 
  echo "After <i>asort</i> the elements have been re-arranged alphabetically by their values: <br/><b>" ;
  print_r($computer) ;
  echo "</b><br/>Notice that elements have NOT been moved around into new index positions - ie, 'HDD1' is still linked to its value of 80000..." ;
  echo "<br/><br/>";

//  print out our array after we sort it alphabetically
  sort($computer); 
  echo "After <i>sort</i> the elements have again been re-arranged alphabetically by their values: <br/><b>" ;
  print_r($computer) ;
  echo "</b><br/>Wow, what happened here???  We seem to have lost our associative keys, ooops!" ;
  echo "<br/><br/>";

echo  "(Maybe this is a good time to use 'unset' and redo our orginal array...)<br/><br/>";
unset($computer);

//  recreating our original array
$computer = array("processor" => "Muncheron 6000",
                    "memory" => 2048, "HDD1" => 80000,
                    "graphics" => "NTI Monster GFI q9000");


//  now print it out after we ksort it
  ksort($computer); 
  echo "After using <i>ksort</i> on our restored array: <br/><b>" ;
  print_r($computer) ;
  echo "</b><br/><br/>";

//  now print it out after we ksort it
  krsort($computer); 
  echo "After using <i>krsort</i> on our restored array: <br/><b>" ;
  print_r($computer) ;
  echo "</b><br/><br/>";

//  for grins, let's try an rsort
  rsort($computer); 
  echo "After <i>rsort</i> the elements have again been re-arranged alphabetically by their values: <br/><b>" ;
  print_r($computer) ;
  echo "</b><br/>BUT - we seem to have lost our associative keys again!" ;
  echo "<br/><br/>";

?>