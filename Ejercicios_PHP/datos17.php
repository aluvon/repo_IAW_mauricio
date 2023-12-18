<?php
$resu = $_POST["edad"];
echo "Hola " . $_POST["name"] . ":" . " "; "<br>";

if ($resu >= 18){
	echo "Tu eres mayor de 18 años.";
}
else {
	echo "Tu eres menor de 18 años.";
}
?>
