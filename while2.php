<?php
$x=0;
$i=0;

while ($x<30)
{
	if($i%2 == 0)
		{
		$x=$x + $i;
		echo "risultato parziale: ".$x. "<br/>";
		$i = $i + 2;
		}
}


?>