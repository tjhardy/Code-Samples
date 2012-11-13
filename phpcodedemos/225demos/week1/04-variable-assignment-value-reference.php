<?php
error_reporting(E_ALL);

// passing by value and reference

echo "Let's assign a variable, a, the value of 123: <B>[\$a = 123]</B> ...<br/>";
$a = 123;

echo "Then, let's assign a variable, b, to the value of variable a thus: <B>[\$b = \$a]</B>...<br/><br/>";
$b = $a;

echo "&nbsp; &nbsp;<font color='blue'>The value in variable a is " . $a . "<br/>";
echo "&nbsp; &nbsp;The value in variable b is " . $b . "</font><br/><br/>";

echo "So, doing it this way, if we change the value of a <B>[\$a = 456]</B>, the value of b remains unchanged<br/><br/>";
$a = 456;

echo "&nbsp; &nbsp;<font color='blue'>The value in variable a now is " . $a . "<br/>";
echo "&nbsp; &nbsp;The value in variable b remains " . $b . "</font><br/><br/>";

echo "Now, let's change the way we assign the value to passing by reference: <b>[\$b = <u>&</u>\$a]<br/>(note the added '&' ampersand character...)</b>...<br/><br/>";
$b = &$a;

echo "&nbsp; &nbsp;<font color='blue'>The value in variable a is " . $a . "<br/>";
echo "&nbsp; &nbsp;The value in variable b is " . $b . "</font><br/><br/>";

//$c = &$a;
//echo "the value of var c = " . $c . "<br/>";

//$b = $b + true;

//echo "the value of var a = " . $a . "<br/>";
//echo "the value of var b = " . $b . "<br/>";


echo "NOW - if we change the value of a, the value of b will also change to reflect that new value: <B>[\$a = 789]</B>...<br/><br/> ";
$a = 789;

echo "&nbsp; &nbsp;<font color='blue'>The value in variable a now is " . $a . "<br/>";
echo "&nbsp; &nbsp;The value in variable b also now is " . $b . "</font><br/><br/>";

?>