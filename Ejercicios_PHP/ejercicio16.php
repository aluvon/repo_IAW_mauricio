<?php
$dias = array(" ", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");
$comidas = array(" ", "Desayuno", "Comida", "Cena");
$comidas2 = array(" ", "desayuno", "comida", "cena");

echo "<table border=2>";

for ($a = 0; $a < 4; $a++) {
        echo "<tr>"; //hago las filas
        for ($b = 0; $b < 8 ; $b++) {
                echo "<td>";
                if ($a == 0){
                        echo "<b>$dias[$b]</b>";
                }
                else {
                        if ($b == 0){
                                echo $comidas[$a];
                        }
                        else {
                                echo $comidas2[$a] . " " . $b;
                        }
                }
                echo "</td>";
        }
        echo "</tr>";
}
   echo "</table>";
?>

