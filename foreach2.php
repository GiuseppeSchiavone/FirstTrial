<?php
$array=array(11, 21, 42, 8, 74, 2, 61, 73, 84, 91); 
$minimo = 3;
$posizione = 0;
foreach ($array as $key => $value)
{
    if ($value < $minimo) 
    {
        $minimo = $value;
        $posizione = $key;
        
    }
}

echo "Il minimo dei valori contenuti in tale array è: " . $minimo . "<br/>";
echo "La posizione in cui si trova è la numero: " .$posizione . "<br/>";


?>