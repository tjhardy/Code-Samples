<?php
include("conn.php");

//create new DOM Document
$dom = new DOMDocument();

//tell it to make the document pretty (line breaks, indented, etc)
$dom->formatOutput = true;

//create the root node
$books=$dom->createElement("books");
$dom->appendChild ($books);

$sql_getbooks = "SELECT * FROM books";

$records = @$conn->query($sql_getbooks);

while (($row_data = @$records->fetch_assoc()) !== NULL)
{

//create first child of root node
$book= $dom->createElement("book");
$books->appendChild ($book);

//add isbn attribute to new book node
$isbnAtt=$dom->createAttribute("isbn");
$isbnAtt->value=$row_data["book_isbn"];
$book->setAttributeNode ($isbnAtt);

//add title child to book node and set text content
$title=$dom->createElement("title");
$book->appendChild ($title);
$titleText=$dom->createTextNode($row_data["book_title"]);
$title->appendChild ($titleText);

//add an author to the authors node and set text content
$author=$dom->createElement("author");
$book->appendChild ($author);
$authorText=$dom->createTextNode($row_data["book_author"]);
$author->appendChild ($authorText);

//add format to the book node and set text content
$format=$dom->createElement("format");
$book->appendChild ($format);
$formatText=$dom->createTextNode($row_data["book_format"]);
$format->appendChild ($formatText);

//add format to the book node and set text content
$price=$dom->createElement("price");
$book->appendChild ($price);
$priceText=$dom->createTextNode($row_data["book_price"]);
$price->appendChild ($priceText);
}
$dom->save("books.xml");
?>