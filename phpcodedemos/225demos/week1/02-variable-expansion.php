<?php
error_reporting(E_ALL);

// "cookie" to "cookies"
echo "<h2>Simple vs Complex Expansion Demo</h2>";

$content = "cookie";

echo "First, let's set a variable, \$content, to a string value of 'cookie'<br/><br/>";

echo "<font face='courier'><b>> \$content = 'cookie';</b></font><br/><br/>";

echo "Then, use the \$content variable in a sentence, like so...<br/><br/>";

echo "<font face='courier'><b>> echo \"I want a \$content.\";</b></font><br/><br/>";

echo "This returns: <font color='blue'>I want a $content.</font> <br/><br/>";

echo "Okay, that's works fine... <b>But, what if you want 'cookie' to be plural?</b><br/><br/>";

echo "<font face='courier'><b>> echo \"I want a whole jar full of \$contents!\";</b></font><br/><br/>";

echo "This returns:  <font color='blue'>I want a whole jar full of $contents!</font> <-- note the missing value!<br/><br/>";

echo "The problem is that the parser sees the variable in the string as a variable named '\$cookies' - not as a variable named '\$cookie' because there is no way for it to separate out the added 's' character from the variable name. And, of course, there is no variable named \$cookies.  Oops.<br/><br/>";

echo "<b>Complex variable expansion allows you more control.</b>  Adding curly braces allows the parser to separate the variable name out from the extra characters we need to add. <br/><br/>";

echo "<font face='courier'><b>> echo \"I want a whole jar full of {\$content}s!\";</b></font><br/><br/>";

echo "This returns:  <font color='blue'>I want a whole jar full of {$content}s!</font>";
?>