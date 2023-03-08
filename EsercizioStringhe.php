<?php

//punto 1
$Stringa1="tpsi e sistemi sono le materie che preferisco";
$Stringa2="Giacomo ha studiato meglio rispetto a Franco";

//punto 2
echo $Stringa1."<br/>";
//echo "<br/>";
echo $Stringa2."<br/>";

//punto 3
echo $Stringa1." e ".$Stringa2;
echo "<br/>";

//punto 4
echo strtoupper($Stringa1);
echo "<br/>";

//punto 5
echo strtolower($Stringa2);
echo "<br/>";

//punto 6
echo Ucfirst($Stringa1);
echo "<br/>";

//punto 7
echo Ucwords($Stringa2);
echo "<br/>";

//punto 8
echo substr($Stringa1, 8, 18);
echo "<br/>";

//punto 9
echo strlen($Stringa1);
echo "<br/>";
echo strlen($Stringa2);

?>