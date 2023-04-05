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


<?php
// null 
$var = NuLl;
echo "Null value",$var;
if(is_null($var)){
    echo "Null find <br>";
}
$a = array();
echo $a == null,"<br>";
echo $a === null,"<br>";

echo is_null($a);
?>

<?php
$a = array();
var_dump((bool)"");
var_dump((bool)"0");
var_dump((bool)0);
var_dump((bool)0.0000);
var_dump((bool)-0.000);
var_dump((bool) null);
var_dump((bool) $a)
?>

<?php
$a = 12345;
$a = 01234;
$a = 01234;
$a = 0x126BE;
$a = 0b010010;
$large_number = 2147483647;
var_dump($large_number);
$large_number = 2147483648;
var_dump($large_number);

$million = 1000000;
$large_number =  50000 * $million;
var_dump($large_number);

var_dump(25/7);
var_dump((int) (25/7));
var_dump(round(25/7));

var_dump((int)8.1);
var_dump(intval(8.1)); 

echo (int) 4.5;
echo (int) null;
echo (int) "1234";
echo (int) "";
?>

<?php
$a = 1.234;
$b = 1.23e4;
$c = 7E-10;
$d = 1_234.567;
echo var_dump($a, $b, $c, $d)
?>

<?php
$expand = 'first var';
$either = 'second var';
echo' <br>string <br>';
echo 'this is a simple string <br>';
echo 'You can also have embedded newlines in
strings this way as it is
okay to do<br>';
// Outputs: Arnold once said: "I'll be back"
echo 'Arnold once said:"I\'will be back"<br>';
// Outputs: You deleted C:\*.*?
echo 'You deleted C:\\*.*?<br>';
echo 'This will not expand: \n a newline<br>';
echo "Variable do not $expand $either<br>";
echo "double qoute expand the variable<br>";
echo "Akshit " ."\r\n"."Loves GeeksForGeeks<br>";
echo nl2br("You will find the \n newlines in this string \r\n on the browser window.<br>");
echo "Akshit "."\r\n"."Loves GeeksForGeeks";
?>




