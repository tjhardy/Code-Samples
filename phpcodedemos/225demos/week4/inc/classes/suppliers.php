<?php

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



?>