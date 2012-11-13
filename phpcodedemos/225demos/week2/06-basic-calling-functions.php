<?php



echo "Setting a variable to the result and calling using echo...<br/><b>";

$message = helloWorld();

function helloWorld() {

  $str1 = "Hello";
  $str2 = ", ";
  $str3 = "World!";
  $string = $str1 . $str2 . $str3;

  return $string;
}

echo $message;

echo "</b><br/><br/>Calling directly using echo...<br/><b>";

echo helloWorld();

echo "</b><br/><br/>Calling with different capitalization...<br/><b>";

echo HELLOWORLD();

echo "</b>";

?>