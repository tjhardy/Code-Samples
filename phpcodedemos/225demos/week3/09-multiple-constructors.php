<?php
class one {
    function __construct() {
		$msg = '<pre>';
        $msg .= '(  _  )( \( )( ___)<br/>';      
		$msg .= ' )(_)(  )  (  )__) <br/>';      
		$msg .= '(_____)(_)\_)(____)()()()</pre><br/>';
		echo $msg;
    }
}
class two extends one {
    function __construct() {
        parent:: __construct(); // use 'parent' scope keyword to call parent class constructor
        $msg = '<pre>';  // added functionality for child
		$msg .= '  (_  _)( \/\/ )(  _  )<br/>';      
		$msg .= '    )(   )    (  )(_)(    </br>';   
		$msg .= '   (__) (__/\__)(_____)()()()</pre>';
		echo $msg;
    }
}
class three extends two {
    function __construct() {
        parent:: __construct();  // grandchild of original class, uses child as parent
        $msg = '<pre>';  // added functionality for grandchild
		$msg .= '      ____  _   _  ____  ____  ____ /\/\/\<br/>';
		$msg .= '     (_  _)( )_( )(  _ \( ___)( ___))()()(<br/>';
		$msg .= '       )(   ) _ (  )   / )__)  )__) \/\/\/<br/>';
		$msg .= '      (__) (_) (_)(_)\_)(____)(____)()()()</pre>';
		echo $msg;
    }
}
$show = new three();
/* result is One...Two...Three!!! */
?>