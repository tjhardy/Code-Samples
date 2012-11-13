<?php
error_reporting(E_ALL);

//  setting our variables by sending in values as parameters
function helloWhoever0($str1,$str2,$str3) {

  $string = $str1 . $str2 . $str3 . "!";

  return $string;
}

echo "Setting three parameters for the function and sending in all three values on function call...<br/>";

// parameters are specified when you call the function
// in the order the function expects to recieve them in
$message = helloWhoever0("Hello",", ","World");

echo "Code: helloWhoever0(\"Hello\",\", \",\"World\"); = <b>" . $message;


echo "</b><br/><br/>Changing the order of the three parameters for the function...<br/>";

// changing the order you send in a parameter changes the variable
// to which it is assigned inside the function
$message = helloWhoever0("World","Hello",", ");

echo "Code: helloWhoever0(\"World\",\"Hello\",\", \"); = <b>" . $message;


// sending in only the variable that is expected to change
// other parameters are set as defaults
function helloWhoever1($name, $str1="Hello", $str2=", ") {

  $str3 = $name . "!";
  $string = $str1 . $str2 . $str3;

  return $string;
}

echo "</b><br/><br/>Setting everything but the name variable to a default value and using 'World' as the parameter for \$name...<br/>";

$message = helloWhoever1("World");

echo "Code: helloWhoever1(\"World\"); = <b>" . $message;


// changing parameter order so that the parameter being passed in
// is the last on the list - leaving a gap in the parameters when
// the function is called...
function helloWhoever2($str1="Hello", $str2=", ", $name) {

  $str3 = $name . "!";
  $string = $str1 . $str2 . $str3;

  return $string;
}

echo "</b><br/><br/>Using 'World' as the parameter for \$name again...<br/><b>";

$message = helloWhoever2("hey","there","World");

echo $message;

echo "</b><br/><br/>";

echo "Ok, let's try that one again, but redo the function so the parameter being passed in is first...<br/>";

function helloWhoever3($name, $str1="Hello", $str2=", ") {

  $str3 = $name . "!";
  $string = $str1 . $str2 . $str3;

  return $string;
}

$message = helloWhoever3("World");

echo "Code: helloWhoever3(\"World\"); = <b>" . $message;

echo "<br/><br/><b>ORDER MATTERS!</b>";
?>