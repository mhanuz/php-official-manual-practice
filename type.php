<?php
# introduction 
$a_bool = true;
$a_str="hi";
$a_str2="hello";
$a_int =10 ;
echo get_debug_type($a_bool), "\n";
echo get_debug_type($a_int), "\n";

if(is_int($a_int)){
    $a_int +=4;
}
var_dump($a_int);

if(is_string($a_str)){
    echo "String: $a_str";
}
?>
