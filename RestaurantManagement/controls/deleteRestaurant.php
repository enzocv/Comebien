<?php
include_once('../../conexion.php');
$link = Conectarse();
$id = $_GET["idRestaurante"];
$query_delete = "DELETE FROM restaurante WHERE  idRestaurante='{$id}'";

mysql_query($query_delete);
header("Location: ../view/deleteRestaurante_view.php");
mysql_close($link);