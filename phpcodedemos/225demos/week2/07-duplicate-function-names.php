<?php

function helloWorld() {

  $str1 = "Hello";
  $str2 = ", ";
  $str3 = "World!";
  $string = $str1 . $str2 . $str3;

  return $string;
}


function helloWorld($name) {

  $message = "Howdy, " . $name . "!";

  return $message;
}


?>