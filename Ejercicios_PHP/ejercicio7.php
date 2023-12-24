<?php
//NO FUNCIONA
read -p "Ingrese el valor de la compra: " valor;
$ingreso = $valor;
$total_compra = 34.5;

if ("$ingreso" < $total_compra) {
	echo "Compra más o te cobraremos 8,95€ de gastos de envío";
}
elseif ("$ingreso" > $total_compra) {
	if ($x = 90 - 50) {
	echo "Con sólo". $x . "€ más podrás tener gastos de envío gratuitos";
	}
}
elseif ("$ingreso" == 90) {
	echo "Gastos de envio incluidos";
	}
}
else {
	echo "Error.";
}
?>
