<?php
include("xmlnodelib.php");

$xmlfile = "books.xml";

//create new DOM object to hold our xml
$dom = new DOMDocument();

//get rid of all the whitespace elements so it's clean
$dom->preserveWhiteSpace = TRUE;

//load and test to make sure everything loaded properly

loadXMLDoc($dom,$xmlfile);

//get root node of the document
$fileroot = $dom->documentElement;

//call information functions
getXMLInfo($fileroot);
?>