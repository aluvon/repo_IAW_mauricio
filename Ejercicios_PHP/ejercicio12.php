<?php
$contador = 1;

echo "<table border=2>";
$cantidad = 10;

for ($a = 0; $a < $cantidad; $a++) {
        if ($a % 2 == 0) {
	  echo "<tr style=\"background-color:grey;\">"; //hago las filas
   	}
        else {
          echo "<tr>"; //no pinta
	}
	for ($b = 0; $b < $cantidad; $b++) {
	     echo "<td>";
	     echo $contador++;
             echo "</td>"; //hago las columnas
	}
   echo "</tr>";
}
   echo "</table>";
?>

