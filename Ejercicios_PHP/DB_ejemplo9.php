<!DOCTIPE html>
<html>
<head>
        <style>
                table {margin-top:30px;}
                td {border:1px solid blue;}
        </style>
</head>
<body>
<?php
        $server='lamp-docker_mysql_1';
        $bd='musica';
        $usu='mauricio';
        $pass='hola0101';
        $port='3306';
        $conn=mysqli_connect($server,$usu,$pass,$bd,$port);

        if (mysqli_connect_error()){
                echo 'error de conexion';
                exit();
        }

	$sql = "INSERT INTO artista (dni, nombre)
	VALUES ('2125452145', 'Amauricio');";
	$sql .="INSERT INTO artista (dni, nombre)
	VALUES ('3235635355', 'Avono');";

	if (mysqli_multi_query($conn, $sql)) {
	  echo "Se almacenaron tus datos correctamente";
	} else {
	  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

        mysqli_close($conn);
?>
</body>
</html>
