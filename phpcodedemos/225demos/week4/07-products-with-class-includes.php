<?php
error_reporting(E_ALL);

// if we had to make connections to other databases, we'd have more than one 
// connection file and connection object set up here to handle it
require("./inc/conn.php");
require("./inc/classes/product.php");
require("./inc/classes/localproduct.php");
require("./inc/classes/suppliers.php");
require("./inc/classfunctions.php");

// contains all the products that the user has put into their cart
// in real life this array of product ids and qty would come from the user's cart session
$products = array(1,2,3);

// loops through each item in the cart and gets the supplier id
foreach ($products as $pid)
  {
	$sqlGetSupplier = "SELECT prod_supplier FROM products1 WHERE prod_id = " . $pid ;
    $records = $conn->query($sqlGetSupplier);
  	$row_data = $records->fetch_assoc();
	$supplier = $row_data["prod_supplier"];

// decides which product object to instantiate based upon supplier

// call function pickProductClass to create product object based upon supplier id
  $newProduct = pickProductClass($conn,$pid,$supplier);

// use getProdInfo method to get basic product info
  $newProduct->getProdInfo();

// get the product's current inventory levels
  $inventory = $newProduct->get_inventory($conn,$pid);
  echo "Number in Stock: " . $inventory . "<br/>";

// normally the number required would come from the cart session array
  $num_required = 16;
  echo "Number Required: " . $num_required . "<br/>";

// check to see if there is enough product in stock to fill the order
// this function gets a status code back
  $status = $newProduct->check_product_in_stock($conn,$pid,$num_required);

  if ($status == 1)
   {
    $orderstatus = "Enough Product In Stock to Fill Order";
   }
  elseif ($status == 0)
   {
   $orderstatus = "<font color='red'>NOT</font> Enough Product In Stock to Fill Order";
   }

// output a message about whether there is enough product in inventory for the order
  echo "Inventory Status: " . $orderstatus . "<br/><br/>";
  }

// edit a product

echo "<h3>Editing a product</h3>";
$newProduct->editProd($conn,1,"Edited AGAIN Widget","This widget has been edited - AGAIN",1345.54);

$newProduct->getProdInfo();

?>