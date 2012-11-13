<?php
// create a DOM document and load the XSL stylesheet
$xsl = new DOMDocument();
$xsl->load('books.xsl');
  
// import the XSL stylesheet into the XSLT process
$xp = new XSLTProcessor();
$xp->importStyleSheet($xsl);

//create new DOM object to hold our xml
  $xml = new DOMDocument();
  $xml->load('books.xml');

// transform the XML into HTML using the XSL file and the built in processor
if ($html = $xp->transformToXML($xml)) 
{
  echo $html;
} 
else 
{
  "Houston, we have a problem...";
} //end if($html = $xp->transformToXML($xml_doc)) 

?>