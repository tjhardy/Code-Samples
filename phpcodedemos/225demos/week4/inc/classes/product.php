<?php
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


?>