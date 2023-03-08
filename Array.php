<?php
$array1=array(3, "ciao", true, 4.1);
echo $array1[1];
print_r($array1);
echo "<br/>";
$array2=array(7, "Hello", 5.6);
print_r($array2);
echo $array2[1];
echo "<br/>";
$array2=array("peppe"=> 7,"sal"=> "Hello","ciro"=> 5.6);
print_r($array2);
echo $array2["sal"];
echo "<br/>";
echo count($array2);
echo "<br/>";

$array3=array(30, 70, 25, 39, 45);
echo min($array3);
echo "<br/>";
echo max($array3);
echo "<br/>";

sort($array3);
print_r ($array3);
echo "<br/>";

rsort($array3);
print_r ($array3);
echo "<br/>";

echo in_array(70, $array3);



?>




