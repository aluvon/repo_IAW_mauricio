<?php
//Paso -1:
echo "Paso -1:"."<br>";
$variable = "e-e-r-s-f-e";
$array2 = str_replace("e", "marmota", $variable);
echo $array2;
echo "<br>"."<br>"."Paso -2:"."<br>";

//Paso -2:
$separados = explode("-", $array2);
print_r($separados);
echo "<br>"."<br>"."Paso -3:"."<br>";

//Paso -3:
$nuevoArray = [];
foreach ($separados as $temporal) {
    // Buscar la posición de 'a' en la bariable temporal.
    $posicionA = strpos($temporal, 'a');

    // Si 'a' no está entonces guarda el resultado dentro del nuevo array
    if ($posicionA === false) {
        $nuevoArray[] = $temporal;
    }
}
print_r($nuevoArray);
?>
