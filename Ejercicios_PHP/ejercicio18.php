<html>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	Nombre: <input type="text" name="name"><br>
	Edad: <input type="text" name="edad"><br>
	<input type="submit">
</form>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$resu = $_POST["edad"];
	echo "Hola " . $_POST["name"] . ":" . " "; "<br>";

		if ($resu >= 18){
        		echo "Tu eres mayor de 18 años.";
		}
		else {
        		echo "Tu eres menor de 18 años.";
	}
}
?>
</body>
</html>
