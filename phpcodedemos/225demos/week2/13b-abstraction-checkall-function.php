<?php
error_reporting(E_ALL);

$var = false;

function checkAll($var) {

$msg = "Here are the results of your check: <br/><br/>";

  if (is_null($var)) {
    $msg .= "This variable is NULL<br/><br/>";
  }
  else {
    $msg .= "This variable is NOT NULL<br/><br/>";
  }
  
  if ($var === "") {
    $msg .= "This variable is EMPTY<br/><br/>";
  }
  else {
    $msg .= "This variable is NOT EMPTY<br/><br/>";
  }
  
  if ($var === false) {
    $msg .= "This variable is FALSE<br/><br/>";
  }
  else {
    $msg .= "This variable is NOT FALSE<br/><br/>";
  }
  
  if ($var === 0) {
    $msg .= "This variable is ZERO<br/><br/>";
  }
  else {
    $msg .= "This variable is NOT ZERO<br/><br/>";
  }
  
  return $msg;
}

echo checkAll($var);

?>