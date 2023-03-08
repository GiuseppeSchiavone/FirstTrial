<?php

$array=array(11, 21, 42, 3, 74, 5, 61, 73, 84, 91); 
$sommapari=0;
$sommadispari=0;
foreach($array as $y => $c)
{
	if($y%2 == 0)
	{
    $sommapari=$sommapari+$c;
	echo $y." - ".$c." - ".$sommapari. "<br/>";
	}
    else
    {
    $sommadispari=$sommadispari+$c;
    echo $y." - ".$c." - ".$sommadispari. "<br/>";
    }
}

?>