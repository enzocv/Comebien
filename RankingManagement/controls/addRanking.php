<?php
include_once ("../../conexion.php");
session_start();
$idUsuario = $_SESSION["idUsuario"];
$calificacion = $_POST["estrellas"];
$restaurante = $_POST["idRes"];

$link = Conectarse();

//$query = "CALL USP_RealizarVoto({$idUsuario},{$restaurante},{$calificacion})";
//mysql_query($query);
$consulta = mysql_query("CALL USP_RealizarVoto('{$idUsuario}','{$restaurante}',
                        '$calificacion')", $link);

header("Location: ../view/listRanking_view.php");