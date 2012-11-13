<?php
//create new DOM object to hold our xml
$dom = new DOMDocument();

//get rid of all the whitespace elements so it's clean
$dom->preserveWhiteSpace = FALSE;

//load and test to make sure everything loaded properly

loadXMLDoc($dom,'books.xml');

//get root node
$books = $dom->documentElement;

//call information functions
getBooksInfo($books);
loadAllBooks($books);


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
  echo "Hurrah, successfully loaded xml file!<br/><br/>";
} //end else
} //end function loadXMLDOC


function getBooksInfo($books)
{ 
//get root node name
echo "Root Node Name: " . $books->nodeName . "<br/>";

//get root node local name
echo "Root Local Name: " . $books->localName . "<br/>";

//get root node namespace URI
echo "Root Namespace URI: " . $books->namespaceURI . "<br/><br/>";
} //end function getBooksInfo


function loadAllBooks($books)
{
//get number of book nodes in parent node books
$countBooks = $books->childNodes;
$numBooks = $countBooks->length;

echo "There are <b>" . $numBooks . "</b> books in the document.<br/><br/>";


for ($count = 1; $count <= $numBooks; $count++)
{
	echo "<br/><b>Parsing through the book number: " . $count . "</b><br/><br/>";

	//set up the book node
	if ($count == 1)
	{
		$book = $books->firstChild;  //get first book
		//get the parent of the book node
		$parent = $book->parentNode ;
		echo "Parent of the Book Node: <b>" . $parent->localName . "</b><br/>";
		echo "The node type of this node is: <b>" . $parent->nodeType . "</b><br/><br/>";

	} //end if ($count == 1)
	else
	{
		$book = $book->nextSibling;  //get next book

	} // end else

getNodeAttributes($book,'isbn');
getChildNodes($book);

} //end for ($count = 0; $count < $numBooks; $count++)
} //end function loadAllBooks


function getNodeAttributes($node,$name)
{
	//get the attribute from the specified node
	if ($node->attributes)
	{
		$attrs = $node->attributes;
		foreach ($attrs as $attr)
		{
			if ($attr->name == $name)
			{
				echo $name . " attribute of this node is: <b>". $attr->value . "</b><br/>";
				echo "The node type of the " . $name . " node is: <b>" . $attr->nodeType . "</b><br/><br/>";
			} //end if ($attr->name == $name)
		} //end foreach ($attrs as $attr)
	} //end if ($node->attributes)
} //end function getNodeAttributes


function getChildNodes($node)
{
	foreach ($node->childNodes as $child)
	{
		//now check to see if child node also has children
		$children = $child->childNodes;
		//echo "children = " . $children->length . "<br/>";
		if ($children->length > 1)
		{
		  //if so, print out its info
		  echo "nodeType: <b>{$child->nodeType}</b>, Name: <b>" . $child->localName . "</b><br/>";
		  //then recursively call this function to get child info
		  getChildNodes($child);
		} //end if ($children->length > 0)
		else
		{
		  echo "nodeType: <b>{$child->nodeType}</b>, Name: <b>" . $child->localName . "</b>, Value: <b>" . $child->textContent . "</b><br/>";
		} //end else
	} //end foreach ($node->childNodes as $child)
} //end function getChildNodes

?>