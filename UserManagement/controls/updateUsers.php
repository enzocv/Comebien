<?php
include_once ('../../conexion.php');
$link = Conectarse();

$nombre = $_POST["name"];
$apellido = $_POST["lastname"];
$email = $_POST["email"];
$contrasena = $_POST["password"];
$idusuario = $_POST["id_usuario"];

$instruccion = "UPDATE usuario
                SET
                  email = '{$email}',
                  contrasena = '{$contrasena}',
                  nombreusuario = '{$nombre}',
                  apellidousuario = '{$apellido}'
                WHERE idusuario = '{$idusuario}'";

//$consulta = mysql_query($instruccion,$link);
if (mysql_query($instruccion,$link)){
    header("Location: ../../search.php?tipo=Criolla");
}
else{
    echo "No se pudo Modificar";
}