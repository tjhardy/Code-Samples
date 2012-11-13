<?php
// add the connection file so the script can use the connection object to 'talk' to the db
include("./inc/conn.php");

$pageheader = <<<BOP
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title> List Product </title>
 </head>
 <body>

BOP;

$pagefooter = <<<EOP
 </body>
</html>

EOP;

echo $pageheader;

echo "<h3>Results of your edit...</h3>";

  $sqlGetProds = "SELECT * FROM products WHERE prod_id = " . $_GET["pid"];
  $records = $conn->query($sqlGetProds);
  
while (($row_data = $records->fetch_assoc()) !== NULL)
{
  echo "<b>Product ID:</b> " . $row_data["prod_id"] . "<br/>";
  echo "<b>Product Name:</b> " . $row_data["prod_name"] . "<br/>";
  echo "<b>Product Description:</b> " . $row_data["prod_desc"] . "<br/>";
  echo "<b>Product Price:</b> $" . $row_data["prod_price_u"] . "<br/>";
  echo "<a href='03-2-editproducts.php?pid=" . $row_data["prod_id"] . "'>Edit</a><br/>" ;
  echo "<a href='03-1-listproducts.php'>List All</a><br/><br/>" ;
}

echo $pagefooter;
?>