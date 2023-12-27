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

        $datos=array();
        $sql="SELECT nombre, dni FROM artista";
        if ($resultado = mysqli_query($conn, $sql)) {
                while ($row = mysqli_fetch_assoc($resultado)) {
                        $datos[]=$row;
                }
                mysqli_free_result($resultado);
        }
        echo '<table celpadding="0" cellspacing="0">';
        echo '<tr><td><strong>NOMBRE</strong></td><td><strong>DNI</strong></td></tr>';
        foreach($datos as $registro){
                echo '<tr><td>' . $registro["nombre"] . '</td><td>' . $registro["dni"] . '</td></tr>';
        }
        echo '</table>';
        mysqli_close($conn);
?>
</body>
</html>
