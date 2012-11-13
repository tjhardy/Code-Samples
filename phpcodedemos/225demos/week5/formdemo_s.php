<?php

echo "<B>For-each loop gets everything in the form array.</B><br/><br/>";

foreach($_POST as $key => $value)
	{
		echo $key . " => " . $value . "<br/>";
	} // end foreach
	

echo "<br/><br/>" ;
echo "<B>Or, you can pull individual items out by their input field \"name.\"</B><br/><br/>";

echo "Name => " . $_POST["name"] .  "<br/>";
echo "E-mail => " . $_POST["email"] .  "<br/>";
echo "Comments => " . $_POST["comments"] .  "<br/>";

?>