<?php

$numarray = array(3,5,2,6,1,0,4);

echo "Here is our array with original values... <br/>";
print_r($numarray);
echo "<br/><br/>";

//function addOne(&$num) {
//return $num++ ;
//}

//array_walk($numarray,'addOne');

rsort($numarray);

echo "Here is our array with new values... <br/>";
print_r($numarray);
echo "<br/><br/>";
?>