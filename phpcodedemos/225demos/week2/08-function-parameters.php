<?php

function helloWhoever($name) {

  $str1 = "Hello";
  $str2 = ", ";
  $str3 = $name . "!";
  $string = $str1 . $str2 . $str3;

  return $string;
}

echo "Using 'World' as the parameter for \$name...<br/><b>";

$message = helloWhoever("World");

echo $message;


echo "</b><br/><br/>Using 'Teresa' as the parameter for \$name...<br/><b>";

$message = helloWhoever("Teresa");

echo $message;


echo "</b><br/><br/>Using 'Jason, James, Ray, Russ, Steven, JustinA, Garrett and JustinL' as the parameter for \$name...<br/><b>";

$message = helloWhoever("Jason, James, Ray, Russ, Steven, JustinA, Garrett and JustinL");

echo $message;

?>