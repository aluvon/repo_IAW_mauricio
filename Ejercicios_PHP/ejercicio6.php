<?php
$dia_ing = date('D');
if ($dia_ing == "Mon") {
	echo "Hoy es Lunes.";
}
elseif ($dia_ing == "Tue") {
	echo "Hoy es Martes.";
}
elseif ($dia_ing == "Wed") {
	echo "Hoy es Miercoles.";
}
elseif ($dia_ing == "Thu") {
	echo "Hoy es Jueves.";
}
elseif ($dia_ing == "Fri") {
	echo "Hoy es Viernes.";
}
elseif ($dia_ing == "Sat") {
	echo "Hoy es Sabado.";
}
elseif ($dia_ing == "Sun") {
	echo "Hoy es Domingo.";
}
else {
	echo "Error.";
}
?>
