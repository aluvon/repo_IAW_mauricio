<?php
function num($fila, $colum) {
	echo "<table border=2>";
		for ($x = 1; $x <= $fila; $x++) {
			echo "<tr>"; //hago las filas
        		        for ($y = 1; $y <= $colum ; $y++) {
                		    echo "<td>"."</td>"; //hago las columnas
                		}
        		echo "</tr>";
		}
	echo "</table>";
	echo "<br>";
}
echo "Tabla 1";
num(2, 3);
echo "Tabla 2";
num(3, 4);
echo "Tabla 3";
num(5, 6);
?>
