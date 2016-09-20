<?php

$name = array("first", "middle", "last");

$name_first = "Mazahir";
$name_middle = "Hussain";
$name_last = "Butt";

foreach ($name as $var) {
	echo "the $var name is " . ${'name_' . $var} . "\n";  
}



?>