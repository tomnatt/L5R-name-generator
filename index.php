<?php

error_reporting(E_ALL);
ini_set('display_errors', True);

set_include_path(get_include_path() . PATH_SEPARATOR . "./templates/");

// how many?
$number = 20;
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

// load name files - only do this if we are generating anything
if ($number > 0) {

    $familyNames = explode("\n", file_get_contents("./data/family_names.txt"));
    // remove the comment line
    array_shift($familyNames);

    $file = "./data/male_names.txt";
    if (isset($_GET["gender"]) && $_GET["gender"] == "female") {
        $file = "./data/female_names.txt";
    }
    $givenNames = explode("\n", file_get_contents($file));
    // remove the comment line
    array_shift($givenNames);

    // generate names
    $names = array();
    $i = 0;
    while ($i < $number) {
        $fn = $familyNames[rand(0, count($familyNames) - 1)];
        $gn = $givenNames[rand(0, count($givenNames) - 1)];
        $names[] = $fn . " " . $gn;
        $i++;
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
