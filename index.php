<?php

error_reporting(E_ALL);
ini_set('display_errors', True);

set_include_path(get_include_path() . PATH_SEPARATOR . "./templates/");

// processing
$number = 0;
if (isset($_GET["number"])) {
    
    // check it is a number
    if (is_int(intval($_GET["number"]))) {
        $number = intval($_GET["number"]);
        
        // check it is a number 1-20
        if (!($number > 0 && $number <= 20)) {
            $number = 0;
        }
    }
}

// output
include_once ("header.inc.php");
include_once ("form.inc.php");
if ($number > 0) {
    include_once ("output.inc.php");
}
include_once ("footer.inc.php");

?>
