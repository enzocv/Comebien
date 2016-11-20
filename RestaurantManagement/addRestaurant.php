<?php
include_once ('../conexion.php');
$link = Conectarse();

$nombreRestaurante = $_POST["nameRestaurant"];
$descripcionRestaurante = $_POST["descriptionRestaurant"];
$detalleRestaurante = $_POST["detailRestaurant"];
$precioGeneral = $_POST["priceRestaurant"];
$capacidadRestaurante = $_POST["capacityRestaurant"];
$serviciosRestaurante = $_POST["servicesRestaurant"];
$direccionRestaurante = $_POST["addressRestaurant"];
$ocacionesRestaurante = $_POST["chanceRestaurant"];
$distritoRestaurante = $_POST["districtRestaurant"];
$menuRestaurante = $_POST["menuRestaurant"];

//SUBIR IMAGEN DE PORTADA DEL RESTAURANTE

$ruta = $_FILES["imageRestaurant"]["tmp_name"];
$nombre_imagen = $_FILES["imageRestaurant"]["name"];

$destino = "../images/frestaurants/".$nombre_imagen;
move_uploaded_file($ruta, $destino);


$instruccion = "INSERT INTO restaurante(capacidad,cartaRestaurante,descripcionRestaurante,detalleRestaurante,
                                        direccionRestaurante,fotoPortada,idDistrito,nombreRestaurante,ocasiones,
                                        precioGeneral,serviciosAdicionales)
                VALUES({$capacidadRestaurante},'{$menuRestaurante}','{$descripcionRestaurante}','{$detalleRestaurante}',
                '{$direccionRestaurante}','{$nombre_imagen}',{$distritoRestaurante},'{$nombreRestaurante}',
                '{$ocacionesRestaurante}',{$precioGeneral},'{$serviciosRestaurante}')";

echo $instruccion;

mysql_query($instruccion);
header("location: ../search.php");