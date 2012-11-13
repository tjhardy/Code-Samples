<?php
error_reporting(E_ALL);

define('STATE_SALES_TAX', 0.05);

$prod_desc = "Blue Widgets";
$prod_qty = 3;
$prod_unit_price = 16.75;
$prod_unit_price = (float)$prod_unit_price ;

$tax = $prod_qty * $prod_unit_price * STATE_SALES_TAX ;
$total = ($prod_qty * $prod_unit_price) + $tax ;

echo "You just bought " . $prod_qty . " " . $prod_desc . " worth $" . $prod_unit_price . " each - which, with sales tax of $" . round($tax,2) . ", comes to a total of $" . round($total,2) . ".";
?>