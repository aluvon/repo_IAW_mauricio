<?php
$retorno = rand(1, 100);
echo "Su valor numerico aleatorio entre 1 y 100 es: " . $retorno."." . "<br>";

if ($retorno < "50") {
        echo "Su valor aleatorio es MENOR de 50.";
}
elseif ($retorno == "50") {
        echo "Su valor aleatorio es IGUAL a 50.";
}
elseif ($retorno > "50") {
        echo "Su valor aleatorio es MAYOR de 50.";
}
else {
        echo "Error";
}
?>
