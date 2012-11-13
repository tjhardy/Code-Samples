<?php

function getProducts($conn)	{
    $sqlGetProds = "SELECT * FROM products";
    $records = $conn->query($sqlGetProds);
  
	while (($row_data = $records->fetch_assoc()) !== NULL)
	{
	  echo "<b>Product ID:</b> " . $row_data["prod_id"] . "<br/>";
	  echo "<b>Product Name:</b> " . $row_data["prod_name"] . "<br/>";
	  echo "<b>Product Description:</b> " . $row_data["prod_desc"] . "<br/>";
	  echo "<b>Product Price:</b> $" . $row_data["prod_price_u"] . "<br/><br/>";
	}
}

function addProduct($conn,$in_name,$in_desc,$in_price_u)
	{
	$sqlAddProd = "INSERT INTO products(prod_name,prod_desc,prod_price_u) VALUES('" . $in_name . "','" . $in_desc . "'," . $in_price_u . ")";
    $result = $conn->query($sqlAddProd);
    echo $conn->affected_rows . " records were affected. <br/><br/>";
    }

?>