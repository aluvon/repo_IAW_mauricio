<?php
$retorno = rand(1, 3);
echo "Su valor numerico aleatorio es: " . $retorno . "<br>";

if ($retorno == "1") {
	echo "Su valor en letra es: UNO";
}
elseif ($retorno == "2") {
	echo "Su valor en letra es: DOS";
}
elseif ($retorno == "3") {
	echo "Su valor en letra es: TRES";
}
else {
	echo "Error";
}
?>
