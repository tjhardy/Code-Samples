<?php

  abstract class Product
  {
    protected $pid;
    protected $name;
    protected $desc;
    protected $price_per_unit;
	protected $supplier;

	function __construct()  // serves as the brains of the constructor 
    { 
    $a = func_get_args();
	// and counts them to see how many are in the array
	if (func_num_args() == 3){
	  $i = 1;	
	}
	else {
	  $i = 2;
	}
 	$f = '__construct' . $i ; //then concatenate function name according to number of args
        call_user_func_array(array($this,$f),$a);  // call function and pass args    
	}
   
    function __construct1
	($in_prodname,
     $in_proddesc,
     $in_price_pu)
    {
	  $this->name = $in_prodname;
      $this->desc = $in_proddesc;
      $this->price_per_unit = $in_price_pu;
	}
	
    public function __construct2
    ($in_prodname,
     $in_proddesc,
     $in_price_pu,
	 $in_supplier)
    {
      $this->name = $in_prodname;
      $this->desc = $in_proddesc;
      $this->price_per_unit = $in_price_pu;
	  $this->supplier = $in_supplier;
    }

    public function __destruct()
    {
      // nothing to do for this demo, but if there was, we'd be doing it now...
    }

    //
    // subclasses must implement these!
    //
    abstract public function check_product_in_stock($in_num_desired);
    abstract public function ship_product_units($in_num_shipped);

    public function get_Name()
    {
      return $this->name;
    }

    public function get_Description()
    {
      return $this->desc;
    }

    public function get_PricePerUnit()
    {
      return $this->price_per_unit;
    }
	
	public function get_Supplier()
    {
      return $this->supplier;
    }	
}

  class localProduct extends Product
  {
    public function check_product_in_stock($in_num_desired)
    {
      // go to our local dbs and see how many we have left.  return -1
      // on a failure of some sort.
	  echo "<br/>We have now gone to our own database here to check if WE have " . $in_num_desired . " local products in stock.<br/><br/>";
    }

    public function ship_product_units($in_num_shipped)
    {
      // go to our local dbs and mark $in_number units as no longer
      // available.  Return TRUE on success, FALSE on failure.
  	  echo "We have gone to our own database here to adjust OUR inventory after we ship the " . $in_num_shipped . "  units that we needed.<br/><br/>";
    }
  }

  class supplierProduct extends Product
  {	
  	public function check_product_in_stock($in_num_desired)
    {
	  $sup = $this->supplier;
	  switch ($sup)
		{
			case 1:
				// check the databases of Supplier 1
				echo "<br/>Function is checking inventory for supplier #1 to check if THEY have " . $in_num_desired . " drop shippable products in stock.<br/>";
			break;
			case 2:
				// check the databases of Supplier 2
				echo "<br/>Function is checking inventory for supplier #2 to check if THEY have " . $in_num_desired . " drop shippable products in stock.<br/>";
			break;
			case 3:
				// check the databases of Supplier 3
				echo "<br/>Function is checking inventory for supplier #3 to check if THEY have " . $in_num_desired . " drop shippable products in stock.<br/>";
			break;
		}
	}
  
    public function ship_product_units($in_num_shipped)
    {
		$sup = $this->supplier;
		switch ($sup)
		{
			case 1:
				// initiate drop shipment of product from Supplier 1
				echo "<br/>Initiating drop shipment of " . $in_num_shipped . " of this product from supplier #1...<br/>";			
			break;
			case 2:
				// initiate drop shipment of product from Supplier 2	
				echo "<br/>Initiating drop shipment of " . $in_num_shipped . " of this product from supplier #2...<br/>";			
			break;
			case 3:
				// initiate drop shipment of product from Supplier 3	
				echo "<br/>Initiating drop shipment of " . $in_num_shipped . " of this product from supplier #3...<br/>";				
			break;
		}
    }
}

// logic would wrap around these to check a flag in the database to see if the product is a local or drop shipped product, and would instantiate the right type of Product accordingly

function makeProduct($supplier)
{
switch ($supplier)
	{
	case "local":
	$newProduct = new localProduct("Solid Gold Widget","This widget IS bling!",1214.59);
	$newProduct->check_product_in_stock(6);
	$newProduct->ship_product_units(6);
	break;
	
	case "dropship":
	$newProduct = new supplierProduct("Solid Silver Widget","This widget IS bling!",245.99,2);
	$newProduct->check_product_in_stock(12);
	$newProduct->ship_product_units(12);
	break;
	}
return $newProduct;
}

$supplier = "local";
makeProduct($supplier);

$supplier = "dropship";
makeProduct($supplier);

?>
