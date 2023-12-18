<?php

echo "<table border=2>";
for ($a = 1; $a <= 4; $a++) {
	echo "<tr>"; //hago las filas
		for ($b = 0; $b <= 4 ; $b++) {
			echo "<td>";
			echo(pow($a,$b));
			echo "</td>"; //hago las columnas
		}
	echo "</tr>";
}
echo "</table>";
?>
