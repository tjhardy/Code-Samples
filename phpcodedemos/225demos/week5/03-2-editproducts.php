<?php
// add the connection file so the script can use the connection object to 'talk' to the db
include("./inc/conn.php");

$pageheader = <<<BOP
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title> Edit Product </title>
 </head>
 <body>

BOP;

$pagefooter = <<<EOP
 </body>
</html>

EOP;

echo $pageheader;

$sql_getprod = "SELECT * FROM products WHERE prod_id = " .  $_GET["pid"];

$records = @$conn->query($sql_getprod);

echo "<h3>Edit Product</h3>";

while (($row_data = @$records->fetch_assoc()) !== NULL)
{
  echo "<form action='productedit_s.php' method='POST'>";
  echo "<input type='hidden' name='prod_id' value='". $row_data["prod_id"] . "'>";
  echo "Name: <input type='text' name='prod_name' value='" . $row_data["prod_name"] . "'><br/>"; 
  echo "Desc: <input type='text' name='prod_desc' value='" . $row_data["prod_desc"] . "'><br/>";
  echo "Cost: <input type='text' name='prod_price_u' value='" . $row_data["prod_price_u"] . "'><br/>";
  echo "<input type='submit' name='submmit' value='Save Changes'>";
  echo "</form><br/><br/>";
}


echo $pagefooter;
?>