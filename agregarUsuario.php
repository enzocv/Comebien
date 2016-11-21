<?php
include_once ("conexion.php");
$link = Conectarse();

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$usuario = $_POST["usuario"];
$password = $_POST["password"];

$instruccion = "INSERT INTO usuario(nombreusuario,apellidousuario,email,contrasena,
                idestadousuario,idnivelusuario)
                VALUES ('{$nombre}','{$apellido}','{$usuario}','$password',1,11);";

mysql_query($instruccion);
mysql_free_result($rs);
mysql_close();
header("Location: principal.php");