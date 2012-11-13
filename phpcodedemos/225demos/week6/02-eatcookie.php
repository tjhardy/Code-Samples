<?php

//how to eat a cookie, remember no output can occur before you call setcookie...

setcookie("user_color",'',time() -3600);

if (!isset($_GET['color']))
{
  echo "Munch, munch, munch!  <br/>";
  echo "Cookie eaten!  <br/><br/>";
}

echo "<a href='01-setcookie.php'>Back to Cookie Jar</a>";
?>