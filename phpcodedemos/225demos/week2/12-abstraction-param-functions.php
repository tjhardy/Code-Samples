<?php
error_reporting(E_ALL);

$var = NULL;
function checkNull($var) {
  if (is_null($var)) {
    $msg = "This variable is NULL<br/><br/>";
  }
  else {
    $msg = "This variable is NOT NULL<br/><br/>";
  }
  return $msg;
}

echo checkNull($var);

$var = "";
function checkEmpty($var) {
  if ($var == "") {
    $msg = "This variable is EMPTY<br/><br/>";
  }
  else {
    $msg = "This variable is NOT EMPTY<br/><br/>";
  }
  return $msg;
}

echo checkEmpty($var);

$var = false;
function checkFalse($var) {
  if ($var == false) {
    $msg = "This variable is FALSE<br/><br/>";
  }
  else {
    $msg = "This variable is NOT FALSE<br/><br/>";
  }
  return $msg;
}

echo checkFalse($var);

$var = 0;
function checkZero($var) {
  if ($var == 0) {
    $msg = "This variable is ZERO<br/><br/>";
  }
  else {
    $msg = "This variable is NOT ZERO<br/><br/>";
  }
  return $msg;
}

echo checkZero($var);

?>