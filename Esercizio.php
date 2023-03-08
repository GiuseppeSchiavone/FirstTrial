<html>
<head>
<title> Primo esercizio </title>
</head>
<h1> GIUSEPPE </h1> 

<?php 
/*
echo "Hello World!";
print "Ciao Peppe!";
*/
$PrimaVariabile= "Ciao";
$SecondaVariabile= " Mondo";
$TerzaVariabile= $PrimaVariabile.$SecondaVariabile;
echo $TerzaVariabile;
$TerzaVariabile=$PrimaVariabile." Giuseppe";
echo $TerzaVariabile;

$PrimaVariabile= 5;
$SecondaVariabile= 3;
$TerzaVariabile= 4;
$Somma= $PrimaVariabile+$SecondaVariabile+$TerzaVariabile;
$A= false;
$B= true;
echo $A && $B;
echo $B || $A;
/*
$Media= $Somma/3;
echo $Media;*/


?>




</html>
