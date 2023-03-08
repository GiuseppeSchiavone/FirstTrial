<?php
$array1=array(55, 6, 77, 9, 33);
$array2=array(3, 16, 71, 34);
$array3=array("pippo", 5, "pluto");

//punto 1
print_r ($array1);
echo "<br/>";
print_r ($array2);
echo "<br/>";
print_r ($array3);
echo "<br/>";

//punto 2
echo $array1[2];
echo "<br/>";
echo $array2[2];
echo "<br/>";
echo $array3[2];
echo "<br/>";

//punto 3
$array4=array("a" => 3, "b" => 16, "c" => 71,"d" => 34);
echo "<br/>";

//punto 4
echo $array4["b"];
echo "<br/>";

//punto 5
echo min($array1);
echo "<br/>";
echo min($array2);
echo "<br/>";


//punto 6
echo max($array1);
echo "<br/>";
echo max($array2);
echo "<br/>";

//punto 7
echo count($array1);
echo "<br/>";
echo count($array2);
echo "<br/>";
echo count($array3);
echo "<br/>";

//punto 8
sort ($array1);
print_r($array1);
echo "<br/>";

//punto 9
rsort ($array2);
print_r($array2);
echo "<br/>";

//punto 10
echo in_array(71, $array2);
echo "<br/>";

?>