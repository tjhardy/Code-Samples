<?php
error_reporting(E_ALL);

    function fetchType($var) {
        if (is_bool($var))             $type='boolean';
        else if (is_int($var))         $type='integer';
        else if (is_float($var))     $type='float';
        else if (is_string($var))     $type='string';
        else if (is_array($var))     $type='array';
        else if (is_object($var))     $type='object';
        else if (is_resource($var)) $type='resource';
        else if (is_null($var))     $type='NULL';
        else $type='unknown type';       

        return $type;
    }


echo "First, setting variable \$num1 = '123';</br>";

$num1 = '123';

echo "Now, getting its type:<b> \$num1 = " . fetchType($num1) . "</b><br/><br/>";

echo "Now, we'll convert that to an integer:  \$num1 = (int)\$num1;<br/>";

$num1 = (int)$num1;

echo "Now, getting its type again:<b> \$num1 = " . fetchType($num1) . "</b><br/><br/>";

echo "You can also use settype to do the conversion: <br/>";

$result = settype($num1,"string");

echo "\$result = settype(\$num1,\"string\");<br/></br>" ;

echo "Check to see if it executed by calling the result:  \$result = $result. <br/> Now, getting \$num1's type again:<b> \$num1 = " . fetchType($num1) . "</b><br/><br/>";

?>