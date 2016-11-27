<?php
include_once ('../conexion.php');
$link = Conectarse();
session_start();

$reserva = $_POST["fechaReserva"];
$idRestaurante = $_POST["idRestaurante"];
$personas = $_POST["personas"];

$today = getdate();
$d = $today['mday']-1;
$m = $today['mon'];
$y = $today['year'];

$fechaActual = $y . "-" . $m . "-" . $d;

if ($fechaActual <= $reserva){
    $instruccion = "INSERT INTO reserva(idusuario,idRestaurante,personas,fechaReserva)
                    VALUES('{$_SESSION["idUsuario"]}','{$idRestaurante}','{$personas}','{$reserva}')";

    $consulta = mysql_query($instruccion,$link);
    header("Location: ../search.php?tipo=Criolla");
}
else{
    header("Location: ../principal.php");
}