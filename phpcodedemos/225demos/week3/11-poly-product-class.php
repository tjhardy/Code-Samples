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

    //
    // initialise a new instance of this class.
    //
    public function __construct
    (
      $in_prodname,
      $in_proddesc,
      $in_price_pu
    )
    {
      $this->name = $in_prodname;
      $this->desc = $in_proddesc;
      $this->price_per_unit = $in_price_pu;
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
  	  echo "We have gone to our own database here to adjust OUR inventory and ship out the " . $in_num_shipped . "  units that we needed.<br/><br/>";

    }
  }


  class OutsideProduct extends Product
  {
    public function check_product_in_stock($in_num_desired)
    {
      // go to our navigation equipment partner's servers and see how
      // many are left.  return -1 on failure.
  	  echo "<br/>We have gone to our partner's database to check if they have " . $in_num_desired . " NON-local products in stock.<br/><br/>";

    }

    public function ship_product_units($in_num_shipped)
    {
      // go to our navigation equipment partner's servers and mark
      // $in_number units as no longer available.  Return FALSE on
      // failure, TRUE on success.
  	  echo "We have gone to our partner's site to initiate a drop-shipment (and inventory adjusment) on the " . $in_num_shipped . "  units that we needed.<br/><br/>";
    }
  }


// various outputs using the above classes
// test to see if we can check on and adjust local inventory with the first child class
echo "<b>Test using LocalProduct class</b><br/><br/>";

$localProduct = new LocalProduct("Sparkly Teal Widget","This widget has bling!",14.59);
echo "The product Name is: " . $localProduct->get_Name() . "<br/>";
echo "The product Description is: " . $localProduct->get_Description() . "<br/>";
echo "The product Unit Price is: $" . $localProduct->get_PricePerUnit() . "<br/>";
$localProduct->check_product_in_stock(12);
$localProduct->ship_product_units(12);


//  test to see if we can check on and adjust NONlocal inventory with the second child class
echo "<b>Test using OutsideProduct class</b><br/><br/>";

$outsideProduct = new OutsideProduct("Sparkly Aquamarine Widget","This widget has even MORE bling!",24.59);
echo "The product Name is: " . $outsideProduct->get_Name() . "<br/>";
echo "The product Description is: " . $outsideProduct->get_Description() . "<br/>";
echo "The product Unit Price is: $" . $outsideProduct->get_PricePerUnit() . "<br/>";
$outsideProduct->check_product_in_stock(6);
$outsideProduct->ship_product_units(6);

?>
