<?php
// basic type introduction 

$a_bool = true ;
$a_str = "hi";
$a_str2 = 'hello';
$a_int = 10;

echo "type of $a_bool is: ", get_debug_type($a_bool);

if(is_bool($a_bool)){
    echo "Boolean", "<br>";
}

var_dump($a_int);

?>
