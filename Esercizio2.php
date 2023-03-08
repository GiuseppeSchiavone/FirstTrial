<html>
<head>
<title> Secondo esercizio </title>
</head>
<h1> GIUSEPPE </h1> 

<?php

$MiaStringa="Pippo e Pluto!";
echo strtolower($MiaStringa)."<br/>";
echo $MiaStringa;

$PrimaVariabile="ciao Giuseppe";
$SecondaVariabile="Hello Salvatore";
echo Ucfirst($PrimaVariabile);
echo Ucfirst($SecondaVariabile);
echo "<br/>";
echo Ucwords($PrimaVariabile);
echo Ucwords($SecondaVariabile);
echo "<br/>";
echo substr($PrimaVariabile, 2, 7);
echo substr($SecondaVariabile, 7, 5);
echo "<br/>";
echo strlen($PrimaVariabile);


?>
</html>
