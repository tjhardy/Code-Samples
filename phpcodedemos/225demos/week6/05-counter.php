<?php
//
// start up the session.  This operates based on settings in 
// php.ini and creates a sessionid ...
//
session_start();

if (isset($_SESSION['counter']))
  $_SESSION['counter'] ++;
else
  $_SESSION['counter'] = 1;

echo "You have visited this page " . $_SESSION['counter'] . " times!<br/><br/>";

var_dump($_SESSION); echo "<br/>\n";
var_dump(session_id()); echo "<br/>\n";
var_dump(session_name()); echo "<br/>\n";
var_dump(session_get_cookie_params()); echo "<br/>\n";
?>