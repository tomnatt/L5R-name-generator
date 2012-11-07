<?php

error_reporting(E_ALL);
ini_set('display_errors', True);

set_include_path(get_include_path() . PATH_SEPARATOR . "./templates/");

// processing
if (isset($_GET["number"])) {
    
}

// output
include_once ("header.inc.php");
include_once ("form.inc.php");
if (isset($_GET["number"])) {
    include_once ("output.inc.php");
}
include_once ("footer.inc.php");

?>
