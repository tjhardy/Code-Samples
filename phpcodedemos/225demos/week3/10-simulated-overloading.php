<?php
class Thing
{
    function __construct()  // serves as the brains of the constructor 
    { 
	    // grabs all the arguments that came in, as an array
        $a = func_get_args();
		// and counts them to see how many are in the array
        $i = func_num_args();
		$f = '__construct' . $i ; //then concatenate function name with number of args
        call_user_func_array(array($this,$f),$a);  //and calls the correct function 
												   // according to number of args      
    }
   
    function __construct1($a1)
    {
        $msg = '__construct1 called with 1 parameter: ' . $a1 . '<br/>';
		echo $msg;
    }
   
    function __construct2($a1,$a2)
    {
        $msg = '__construct2 called with 2 parameters: ' . $a1 . ', ' . $a2 . '<br/>';
		echo $msg;
    }
   
    function __construct3($a1,$a2,$a3)
    {
        $msg = '__construct3 called with 3 parameters: ' . $a1 . ', ' . $a2 . ', ' . $a3 ;
		$msg .= '<br/><br/><iframe width="420" height="315" src="http://www.youtube.com/embed/s8MDNFaGfT4" frameborder="0" allowfullscreen></iframe>';
		echo $msg;
    }
}
$output = new Thing('dog');
$output = new Thing('car','scooter');
$output = new Thing('PEANUT BUTTER','JELLY','TIME!!!');
?>