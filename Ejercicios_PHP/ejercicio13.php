<?php
$par = 0;
$miarray = array();
for ($a = 0; $a < 10; $a++) {
	$miarray[$a] = $par;
	$par=$par+2;
}
foreach ($miarray as $resultado)
	echo "$resultado <br>";
?>
