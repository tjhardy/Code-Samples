<?php

  $breads = array("baguette", "naan", "roti", "pita");
  echo "I like to eat ". $breads[3] . "<br/>\n";

  $computer = array("processor" => "Muncheron 6000",
                    "memory" => 2048, "HDD1" => 80000,
                    "graphics" => "NTI Monster GFI q9000");
  echo "My computer has a " . $computer['processor'] 
       . " processor<br/>\n";  

  $x = 0;
  echo "Today's special bread is: " . $breads[$x] . "<br/>\n";

  // Example 1
  // This is not a problem, because PHP easily finds the '2'
  //
  echo "I like to eat $breads[2] every day!<br/>\n";

  // Example 2
  // This also works without a problem.
  //
  $feature = "memory"; 
  echo "My PC has $computer[$feature]MB of memory<br/>\n";

  // Example 3, 4
  // Neither of these will work and both will print an error.
  //
  //echo "My PC has a $computer['processor'] processor<br/>\n";
  //echo "My PC has a $computer[""processor""] processor<br/>\n";

  // Example 5, 6
  // These will work just fine. The first one is preferred:
  //
  echo "My PC has a {$computer['processor']} processor<br/>\n";
  echo "My PC has a $computer[processor] processor<br/>\n";

  // Example 7
  // Outside of a quoted string though, you should never use
  // this syntax:
  //
  //echo $computer[processor];

  // although this one is just fine
  //
  echo "My PC has a {$computer['graphics']} graphics card<br/>\n";
?>

