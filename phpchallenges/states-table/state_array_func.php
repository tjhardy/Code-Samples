<?php

function makeCells($in_array){
   asort($in_array);  // make sure array is truly alphabetized
   array_walk($in_array,'addCellCode');
   $num_cells = count($in_array);
   $index = 1;
   while ($index <= $num_cells){
     $new_array[$index] = array_shift($in_array);  // add numeric key to allow for math
	 $index++;
   }
   return $new_array;
};

function addCellCode(&$value,$key){
   $value = "<td><input type='checkbox' name='states[]' id='" . $key . "' value='" . $value . "'>" . " " . $value . "</td>";
};

function makeRows($cell_array,$cols){
   $num_cells = count($cell_array);
   $num_rows = ($num_cells / $cols);
   $num_rows = ceil($num_rows);
   $row_counter = 1;
   $table_html = "";
   while ($row_counter <= $num_rows) {
	 $table_html .= "<tr>";
	 $column_counter = 1;
	 $key = 0;
	   while ($column_counter <= $cols){
	     $key = $row_counter + (($column_counter - 1) * $num_rows) ;
		 if ($key <= $num_cells){
		    $table_html .= $cell_array[$key] ;
		 }
		 else {
		    $table_html .= "<td>&nbsp;</td>" ;
		 }
	     $column_counter++;
	    }
	 $table_html .= "<tr>";
	 $row_counter++;
   }
   return $table_html;
}

function displayRows($in_array,$cols){
   $cell_array = makeCells($in_array);
   $table_rows = makeRows($cell_array,$cols);
   print $table_rows;
};

function getCheckedStates($states){
  print "<p><b>You selected the following states: </b><br/>";
  foreach ($states as $state){
    print $state . "<br/>";
  }
  print "</p>";
  unset($_POST);
};