<?php

if (isset($_GET['color']))
{
  //
  // please note that NO output can occur before the setcookie
  //
  setcookie("user_color", $_GET['color']);
  echo <<<EOM
  Cookie was set to new value: <b>{$_GET['color']}</b><br/>
EOM;

}
else
{
  echo <<<EOM
  No cookie came with the request.  Pick a colour to set.<br/>
EOM;
}

if (isset($_COOKIE["user_color"]))
{
  echo <<<EOM
  The cookie value received with the request was:
  <b>{$_COOKIE['user_color']}</b><br/>
EOM;
}

?>

<form action='<?php echo $_SERVER['PHP_SELF'] ?>' method='GET'>
  <font color='red'>
  <input type='radio' name='color' value='red'/>Red<br/>
  </font>
  <font color='blue'>
  <input type='radio' name='color' value='blue'/>Blue<br/>
  </font>
  <font color='green'>
  <input type='radio' name='color' value='green'/>Green<br/>
  </font>
  <font color='yellow'>
  <input type='radio' name='color' value='yellow'/>Yellow<br/>
  </font>
  <font color='orange'>
  <input type='radio' name='color' value='orange'/>Orange<br/>
  </font>
  <input type='submit' value='Submit Choice'/>
</form>

<br/><br/>

<a href="02-eatcookie.php">Now, eat the cookies!</a>
