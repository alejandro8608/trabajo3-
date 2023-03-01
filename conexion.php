<?php

function conectar(){


$server = "localhost";
$b_datos = "bd_seguimiento";
$usuario = "root";
$pass = "";
// Crear conexion
$con = mysqli_connect($server, $usuario, $pass, $b_datos);
// elegir conexion
if (!$con) {
    die(".fallo de conexion: " . mysqli_connect_error());
}
echo "conexion ok";
mysqli_close($con);
 return $con;
}
?>