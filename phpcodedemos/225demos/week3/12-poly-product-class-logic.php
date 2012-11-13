<?php

  //
  // "ProductID"
  // "Name"
  // "Description"
  // "Price"
  //

  abstract class Product
  {
    protected $pid;
    protected $name;
    protected $desc;
    protected $price_per_unit;
	protected $supplier;

    //
    // initialise a new instance of this class.
    //
    public function __construct
    (
      $in_prodname,
      $in_proddesc,
      $in_price_pu,
	  $in_supplier
    )
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

  class LocalProduct extends Product
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


  class OutsideProduct1 extends Product
  {
    public function check_product_in_stock($in_num_desired)
    {
      // go to our navigation equipment partner's servers and see how
      // many are left.  return -1 on failure.
  	  echo "<br/>Function is checking inventory for supplier #1.<br/><br/>";

    }

    public function ship_product_units($in_num_shipped)
    {
      // go to our navigation equipment partner's servers and mark
      // $in_number units as no longer available.  Return FALSE on
      // failure, TRUE on success.
    }
  }


  class OutsideProduct2 extends Product
  {
    public function check_product_in_stock($in_num_desired)
    {
      // go to our navigation equipment partner's servers and see how
      // many are left.  return -1 on failure.
  	  echo "<br/>Function is checking inventory for supplier #2.<br/><br/>";

    }

    public function ship_product_units($in_num_shipped)
    {
      // go to our navigation equipment partner's servers and mark
      // $in_number units as no longer available.  Return FALSE on
      // failure, TRUE on success.
    }
  }


  class OutsideProduct3 extends Product
  {
    public function check_product_in_stock($in_num_desired)
    {
      // go to our navigation equipment partner's servers and see how
      // many are left.  return -1 on failure.
  	  echo "<br/>Function is checking inventory for supplier #3.<br/><br/>";

    }

    public function ship_product_units($in_num_shipped)
    {
      // go to our navigation equipment partner's servers and mark
      // $in_number units as no longer available.  Return FALSE on
      // failure, TRUE on success.
    }
  }


// various outputs using the above classes
// test to see if we can check on and adjust local inventory with the first child class

function findSupplier($supplier)
{
	switch ($supplier)
	{
	case "Supplier 1":
	$newProduct = new OutsideProduct1("Solid Gold Widget","This widget IS bling!",1214.59);
	$newProduct->check_product_in_stock(6);
	break;

	case "Supplier 2":
	$newProduct = new OutsideProduct2("Solid Gold Widget","This widget IS bling!",1214.59);
	$newProduct->check_product_in_stock(6);
	break;

	case "Supplier 3":
	$newProduct = new OutsideProduct3("Solid Gold Widget","This widget IS bling!",1214.59);
	$newProduct->check_product_in_stock(6);
	break;
	}
return $newProduct;
}



echo "<b>Using logic to determine which class to use</b><br/><br/>";
echo "First item in list: uses supplier #2 <br/>";
$supplier = "Supplier 2";
findSupplier($supplier);


echo "<br/><br/>Second item in list: uses supplier #1 <br/>";
$supplier = "Supplier 1";
findSupplier($supplier);


echo "<br/><br/>Third item in list: uses supplier #3 <br/>";
$supplier = "Supplier 3";
findSupplier($supplier);

?>
