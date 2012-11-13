<?php

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

?>