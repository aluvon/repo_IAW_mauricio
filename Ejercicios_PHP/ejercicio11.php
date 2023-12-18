<?php
$contador = 1;

echo "<table border=2>";

for ($a = 0; $a < 10; $a++) {
     echo "<tr>"; //hago las filas

	for ($b = 0; $b < 10; $b++) {
	     echo "<td>";
	     echo $contador++;
             echo "</td>"; //hago las columnas
	}
   echo "</tr>";
}
   echo "</table>";
?>

