<?php
error_reporting(E_ALL);

require("./inc/conn.php");
require("./inc/functions.php");

echo "<h3>Getting a list of all products from the database...</h3>";

getProducts($conn);

echo "<h3>Adding a new product to the database...</h3>";

addProduct($conn,'Teal','Sparkly Teal Widget',24.00);

echo "<h3>Getting a list of all products from the database again...</h3>";

getProducts($conn);

$conn -> close();

?>