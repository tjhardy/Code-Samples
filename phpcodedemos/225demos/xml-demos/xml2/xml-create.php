<?php

//create new DOM Document
$dom = new DOMDocument();

//tell it to make the document pretty (line breaks, indented, etc)
$dom->formatOutput = true;

//create the root node
$books=$dom->createElement("books");
$dom->appendChild ($books);

//create first child of root node
$book= $dom->createElement("book");
$books->appendChild ($book);

//add isbn attribute to new book node
$isbnAtt=$dom->createAttribute("isbn");
$isbnAtt->value="978-0470114872";
$book->setAttributeNode ($isbnAtt);

//add title child to book node and set text content
$title=$dom->createElement("title");
$book->appendChild ($title);
$titleText=$dom->createTextNode("Beginning XML");
$title->appendChild ($titleText);

//add subtitle child to book node and set text content
$subtitle=$dom->createElement("subtitle");
$book->appendChild ($subtitle);
$subtitleText=$dom->createTextNode("Programmer to Programmer");
$subtitle->appendChild ($subtitleText);

//add authors child to book node
$authors=$dom->createElement("authors");
$book->appendChild ($authors);

//add an author to the authors node and set text content
$author=$dom->createElement("author");
$authors->appendChild ($author);
$authorText=$dom->createTextNode("David Hunter");
$author->appendChild ($authorText);

//add another author to the authors node and set text content
$author=$dom->createElement("author");
$authors->appendChild ($author);
$authorText=$dom->createTextNode("Jeff Rafter");
$author->appendChild ($authorText);

//add a third author to the authors node and set text content
$author=$dom->createElement("author");
$authors->appendChild ($author);
$authorText=$dom->createTextNode("Joe Fawcett");
$author->appendChild ($authorText);

//add format to the book node and set text content
$format=$dom->createElement("format");
$book->appendChild ($format);
$formatText=$dom->createTextNode("Paperback");
$format->appendChild ($formatText);

$dom->save("books.xml");
?>