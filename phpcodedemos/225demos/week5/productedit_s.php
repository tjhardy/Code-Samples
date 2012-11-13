<?php
// add the connection file so the script can use the connection object to 'talk' to the db
include("./inc/conn.php");

  $sqlGetProds = "UPDATE products SET prod_name = '" . $_POST["prod_name"] . "', prod_desc = '" . $_POST["prod_desc"] . "', prod_price_u = " .  $_POST["prod_price_u"] . " WHERE prod_id = " . $_POST["prod_id"];
  $records = $conn->query($sqlGetProds);

$pid = $_POST['prod_id'];

header("Location: 03-1b-listproduct.php?pid=" . $pid);

?>