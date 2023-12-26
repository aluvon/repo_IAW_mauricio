<!DOCTIPE html>
<html>
<head>
        <style>
                table {margin-top:30px;}
                td {border:1px solid blue;}
        </style>
</head>
</body>
//NO FUNCIONA
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
        $sql="SELECT nombre, sede, NULL as 'admiran' FROM club WHERE cod_grup IN (5, 6)";
        $sql .=" UNION ";
        $sql .="SELECT nombre, NULL as 'sede', nombre as 'admiran' FROM grupo WHERE cod IN (5, 6)";

        if ($resultado = mysqli_query($conn, $sql)) {
                while ($row = mysqli_fetch_assoc($resultado)) {
                        $datos[]=$row;
                }
                mysqli_free_result($resultado);
        }
        echo '<table celpadding="0" cellspacing="0">';
        echo '<tr><td><strong>NOMBRE</strong></td><td><strong>SEDE</strong></td><td><strong>ADMIRAN</strong></td></tr>';
        foreach($datos as $registro){
                echo '<tr><td>' . $registro["nombre"] .'</td><td>' . $registro["sede"] .'</td><td>' . $registro["admiran"] .'</td></tr>';
        }
        echo '</table>';
        mysqli_close($conn);
?>
</body>
</html>
