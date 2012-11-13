<?php
error_reporting(E_ALL);

// create our connection object by filling in our connection string params
$conn = new mysqli('localhost','tjhardy','t1g3r1','tjhardy');

// 'connect_error()' returns the last connection type error, if there is one
if (mysqli_connect_errno() !=0)
{
  // returns the descriptive string associated with the error
  $alert = mysqli_connect_error();
  echo "Oops! There seems to be a connection error:  " . $alert;
}
else
{

  // if we have a good connection, then we are free to do our work

  // create an sql statement to execute - in this case, to grab all the products from the db

echo "<h3>Getting a list of all products from the database...</h3>";

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

getProducts($conn);

echo "<h3>Adding a new product to the database...</h3>";

function addProduct($conn,$in_name,$in_desc,$in_price_u)
	{
	$sqlAddProd = "INSERT INTO products(prod_name,prod_desc,prod_price_u) VALUES('" . $in_name . "','" . $in_desc . "'," . $in_price_u . ")";
    $result = $conn->query($sqlAddProd);
    echo $conn->affected_rows . " records were affected. <br/><br/>";
    }

addProduct($conn,'Purple Widget','Plum Purple Widget',13.00);

echo "<h3>Getting a list of all products from the database again...</h3>";

getProducts($conn);
 
  $conn -> close();
}// end else

?>