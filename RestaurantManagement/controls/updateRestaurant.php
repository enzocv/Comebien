<?php
include_once('../../conexion.php');
$link = Conectarse();
$id = $_GET["idRestaurante"];
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

if($nombre_imagen!=""){
    $destino = "../../images/frestaurants/".$nombre_imagen;
    move_uploaded_file($ruta, $destino);

    $instruccion = "UPDATE restaurante SET  capacidad = {$capacidadRestaurante},
                                            cartaRestaurante = '{$menuRestaurante}',
                                            descripcionRestaurante = '{$descripcionRestaurante}',
                                            detalleRestaurante = '{$detalleRestaurante}',
                                            direccionRestaurante = '{$direccionRestaurante}',
                                            fotoPortada = '{$nombre_imagen}',
                                            idDistrito = {$distritoRestaurante},
                                            nombreRestaurante = '{$nombreRestaurante}',
                                            ocasiones = '{$ocacionesRestaurante}',
                                            precioGeneral = {$precioGeneral},
                                            serviciosAdicionales = '{$serviciosRestaurante}'
                    WHERE idRestaurante = {$id};";
} else{
    $instruccion = "UPDATE restaurante SET  capacidad = {$capacidadRestaurante},
                                            cartaRestaurante = '{$menuRestaurante}',
                                            descripcionRestaurante = '{$descripcionRestaurante}',
                                            detalleRestaurante = '{$detalleRestaurante}',
                                            direccionRestaurante = '{$direccionRestaurante}',
                                            idDistrito = {$distritoRestaurante},
                                            nombreRestaurante = '{$nombreRestaurante}',
                                            ocasiones = '{$ocacionesRestaurante}',
                                            precioGeneral = {$precioGeneral},
                                            serviciosAdicionales = '{$serviciosRestaurante}'
                    WHERE idRestaurante = {$id};";
}



echo $instruccion;

mysql_query($instruccion);
header("location: ../../principal.php");