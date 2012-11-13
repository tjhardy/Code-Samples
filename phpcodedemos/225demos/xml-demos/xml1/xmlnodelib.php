<?php
//functions start here

function loadXMLDoc($dom,$file)
{
	$result = $dom->load($file);

	if ($result === FALSE)
	{
		echo "Houston, we have a problem...";
	} //end if ($result === FALSE)
	else
	{
		echo "Hurrah, successfully loaded the xml file!<br/><br/>";
	} //end else
} //end function loadXMLDOC


function getXMLInfo($fileroot)
{ 
	//get root node type
	echo "Root Node Type: " . $fileroot->nodeType . "<br/>";

	//get root node name
	echo "Root Node Name: " . $fileroot->nodeName . "<br/>";

	//get root node local name
	echo "Root Local Name: " . $fileroot->localName . "<br/>";

	//get root node prefix (if any)
	if ($fileroot->prefix == "")
	  {
		echo "Root Prefix: None<br/>";
	  }
	else
	  {
		echo "Root Prefix: " . $fileroot->prefix . "<br/>";
	  }

	//get root node namespace URI
	echo "Root Namespace URI: " . $fileroot->namespaceURI . "<br/><br/>";

	//get root node text content
	echo "Root Node Text Content: " . $fileroot->textContent . "<br/><br/>";

} //end function getXMLInfo

?>