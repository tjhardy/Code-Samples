<?php
error_reporting(E_ALL);

// if we had to make connections to other databases, we'd have more than one 
// connection file and connection object set up here to handle it
require("./inc/conn.php");

// set up parent class 'Product'

abstract class Product
{
  protected $prod_id;
  protected $prod_name;
  protected $prod_desc;
  protected $prod_price_u;
  protected $prod_supplier;

// these are the functions all the child products will implement to check inventory levels
abstract public function check_product_in_stock($conn,$pid,$in_num_desired);
abstract public function get_inventory($conn,$pid);
abstract public function adjust_inventory($conn,$pid);

// construct the basic product object with information from the local database
// every product will have at least the basic info in the local database
public function __construct($conn,$pid)
  {
    $sqlGetProds = "SELECT * FROM products1 WHERE prod_id = " . $pid ;
    $records = $conn->query($sqlGetProds);
  
	$row_data = $records->fetch_assoc();
	 $this->prod_id = $row_data["prod_id"];
	 $this->prod_name = $row_data["prod_name"];
	 $this->prod_desc = $row_data["prod_desc"];
	 $this->prod_price_u = $row_data["prod_price_u"];
	 $this->prod_supplier = $row_data["prod_supplier"];
  }


public function getProdInfo()
  {
	echo "Product ID is: " . $this->prod_id . "<br/>";
	echo "Product name is: " . $this->prod_name . "<br/>";
	echo "Product desc is: " . $this->prod_desc . "<br/>";
	echo "Product price is: $" . $this->prod_price_u . "<br/>";
	echo "Product supplier id is: " . $this->prod_supplier . "<br/>";
  }

public function editProd($conn,$pid,$in_name,$in_desc,$in_price)
  {
	// update the database record for this product
    $sqlUpdateProd = "UPDATE products1 SET prod_name = '" . $in_name . "', prod_desc = '" . $in_desc . "', prod_price_u = " . $in_price . " WHERE prod_id = " . $pid ;
    $result = $conn->query($sqlUpdateProd);

	// give number of records affected
	echo "Number of records updated: " . $conn->affected_rows . "<br/><br/>" ; 

    // update our current product object
	$this->prod_id = $pid;
	$this->prod_name = $in_name;
	$this->prod_desc = $in_desc;
	$this->prod_price_u = $in_price;
  }

public function deleteProd()
  {
   // delete code would go here
  }
} // end parent class Product


class LocalProduct extends Product
  {
    protected $prod_inv;

    public function check_product_in_stock($conn,$pid,$in_num_desired)
    {
	  $sqlGetInv = "SELECT prod_inv FROM products1 WHERE prod_id = " . $pid;
      $record = $conn->query($sqlGetInv);
  
	  $row_data = $record->fetch_assoc();
	  $prod_inv = $row_data["prod_inv"];
	  if ($prod_inv >= $in_num_desired)
	  {
	    $status = 1 ;
	  }
	  else 
	  {
	    $status = 0 ;
	  }
	  return $status;
    }

    public function get_inventory($conn,$pid)
    {
	  $sqlGetInv = "SELECT prod_inv FROM products1 WHERE prod_id = " . $pid;
      $record = $conn->query($sqlGetInv);
  
	  $row_data = $record->fetch_assoc();
	  $prod_inv = $row_data["prod_inv"];
	  return $prod_inv;
    }

	public function adjust_inventory($conn,$pid)
	{
	  // code to adjust inventory would go here
	}

  }// end class LocalProduct


class Supplier2Product extends Product
  {
    protected $prod_inv;

    public function check_product_in_stock($conn,$pid,$in_num_desired)
    {
	  $sqlGetInv = "SELECT prod_inv FROM products2 WHERE prod_id = " . $pid;
      $record = $conn->query($sqlGetInv);
  
	  $row_data = $record->fetch_assoc();
	  $prod_inv = $row_data["prod_inv"];
	  if ($prod_inv >= $in_num_desired)
	  {
	    $status = 1 ;
	  }
	  else 
	  {
	    $status = 0 ;
	  }
	  return $status;
    }

    public function get_inventory($conn,$pid)
    {
	  $sqlGetInv = "SELECT prod_inv FROM products2 WHERE prod_id = " . $pid;
      $record = $conn->query($sqlGetInv);
  
	  $row_data = $record->fetch_assoc();
	  $prod_inv = $row_data["prod_inv"];
	  return $prod_inv;
    }

	public function adjust_inventory($conn,$pid)
	{
	  // code to adjust inventory would go here
	}

  }// end class Supplier2Product


class Supplier3Product extends Product
  {
    protected $prod_inv;

    public function check_product_in_stock($conn,$pid,$in_num_desired)
    {
	  $sqlGetInv = "SELECT prod_inv FROM products3 WHERE prod_id = " . $pid;
      $record = $conn->query($sqlGetInv);
  
	  $row_data = $record->fetch_assoc();
	  $prod_inv = $row_data["prod_inv"];
	  if ($prod_inv >= $in_num_desired)
	  {
	    $status = 1 ;
	  }
	  else 
	  {
	    $status = 0 ;
	  }
	  return $status;
    }

    public function get_inventory($conn,$pid)
    {
	  $sqlGetInv = "SELECT prod_inv FROM products3 WHERE prod_id = " . $pid;
      $record = $conn->query($sqlGetInv);
  
	  $row_data = $record->fetch_assoc();
	  $prod_inv = $row_data["prod_inv"];
	  return $prod_inv;
    }

	public function adjust_inventory($conn,$pid)
	{
	  // code to adjust inventory would go here
	}

  }// end class Supplier3Product



function pickProductClass($conn,$pid,$supplier)
{
	switch ($supplier)
	{
	case 1:
	$newProduct = new LocalProduct($conn,$pid);
	break;

	case 2:
	$newProduct = new Supplier2Product($conn,$pid);
	break;

	case 3:
	$newProduct = new Supplier3Product($conn,$pid);
	break;

	}
return $newProduct;
}

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

// call function pickProductClass to create product object
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
$newProduct->editProd($conn,1,"Edited Widget","This widget has been edited",345.54);

$newProduct->getProdInfo();

?>