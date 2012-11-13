<?php

$file = "books.xml";

function startElement($parser, $name, $attrs) 
{
    echo "start tag: &lt;";    
	echo "$name";
	echo "&gt;";
	echo "<br/>";
}

function endElement($parser, $name) 
{
    echo "end tag: &lt;/";    
	echo "$name";
	echo "&gt; <br/>";
}

$xml_parser = xml_parser_create();
xml_set_element_handler($xml_parser, "startElement", "endElement");
if (!($fp = fopen($file, "r"))) {
    die("could not open XML input");
}

while ($data = fread($fp, 4096)) {
    if (!xml_parse($xml_parser, $data, feof($fp))) {
        die(sprintf("XML error: %s at line %d",
                    xml_error_string(xml_get_error_code($xml_parser)),
                    xml_get_current_line_number($xml_parser)));
    }
}
xml_parser_free($xml_parser);
?>