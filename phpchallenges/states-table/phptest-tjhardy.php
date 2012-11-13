<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
include("state_array.inc");
include("state_array_func.php");
?>

<html>
  <head>
    <title> Teresa McGuffey Hardy's PHP Solution </title>
  </head>
  <body>
    <h3>Please select your desired states:</h3>
    <table cellpadding='5' cellspacing='5' width='90%' border='0'>
    <tr><td valign='top'>
    <form action="" method="POST">
	  <table border="1">
		<tr bgcolor="#eee">
			<th width="150">Column 1</th>
			<th width="150">Column 2</th>
			<th width="150">Column 3</th>
		</tr>
		<?php
			// add more column headers above if you like, but don't forget to change $cols to match
			$cols = 3;
			displayRows($state_list,$cols);
		?>
	  </table>
	  <br/>
	  <input type='submit' value='Save My States'>
    </form>
	<?php
	    // chosen state display area
	    if (isset($_POST["states"])){
	    getCheckedStates($_POST["states"]);
	    }
	?>
	</td><td valign='top'>
		<pre>STATES TABLE CODING CHALLENGE
    	3-column alphabetical layout using tables:

    	Your goal is to display all of the US states as given in the array below
    	into a 3-column layout.  Each state should have its own table cell.
    	The output should look something like this:

    	+----------+-----------+--------------+
    	+ Column 1 + Column 2  +   Column 3   +
    	+----------+-----------+--------------+
    	+ Alabama  + Louisiana + Ohio         +
    	+----------+-----------+--------------+
    	+ Alaska   + Maine     + Oklahoma     +
    	+----------+-----------+--------------+
    	+ Arizona  + Maryland  + Oregon       +
    	+----------+-----------+--------------+
    	....
    	....
    	....
    	+----------+-----------+--------------+

    	The goal is to have the complete list of states in alphabetical order in this
    	3-column table.  (Note the order of the states is top to bottom in the cols,
    	not left to right in rows. Left to right would have been easy!)

    	Extra points if you have the states be user-selectable and report back to the
    	user which states they chose after they click submit.

    	Suggested Solution: http://berdingconsulting.com/example_solution/	</pre>
	</td></tr></table>
  </body>
</html>
