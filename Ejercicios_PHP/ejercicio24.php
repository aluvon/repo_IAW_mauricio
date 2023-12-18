<?php
//Paso 1:
echo "Paso 1:"."<br>";
$variable = "e-e-r-s-f-e";
$array2 = str_replace("e", "marmota", $variable);
echo $array2;
echo "<br>"."Paso 2:"."<br>";

//Paso 2:
$separados = explode("-", $array2);
print_r($separados);
echo "<br>"."Paso 3:"."<br>";

//Paso 3:
$ordenar = $separados;
sort($ordenar);
print_r($ordenar);
?>
