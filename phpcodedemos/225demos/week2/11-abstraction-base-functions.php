<?php
error_reporting(E_ALL);

function checkNull() {
  $var = NULL;
  if (is_null($var)) {
    $msg = "This variable is NULL<br/><br/>";
  }
  else {
    $msg = "This variable is NOT NULL<br/><br/>";
  }
  return $msg;
}

echo checkNull();


function checkEmpty() {
  $var = "";
  if ($var == "") {
    $msg = "This variable is EMPTY<br/><br/>";
  }
  else {
    $msg = "This variable is NOT EMPTY<br/><br/>";
  }
  return $msg;
}

echo checkEmpty();


function checkFalse() {
  $var = false;
  if ($var == false) {
    $msg = "This variable is FALSE<br/><br/>";
  }
  else {
    $msg = "This variable is NOT FALSE<br/><br/>";
  }
  return $msg;
}

echo checkFalse();


function checkZero() {
  $var = 0;
  if ($var == 0) {
    $msg = "This variable is ZERO<br/><br/>";
  }
  else {
    $msg = "This variable is NOT ZERO<br/><br/>";
  }
  return $msg;
}

echo checkZero();

?>