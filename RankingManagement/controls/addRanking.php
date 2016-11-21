<?php
include_once ("../../conexion.php");
session_start();
$idUsuario = $_SESSION["idUsuario"];
$calificacion = $_POST["estrellas"];
$restaurante = $_POST["idRes"];

//$query = "CALL USP_RealizarVoto({$idUsuario},{$restaurante},{$calificacion})";
//mysql_query($query);
