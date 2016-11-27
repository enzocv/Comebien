<?php
include_once("conexion.php");
$link = Conectarse();
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ComeBien | Restaurant</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!--GALLERY STUFF-->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js"></script>
    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js"></script>
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js"></script>
    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>
    <!--GALLERY STUFF END-->
    <link rel="stylesheet" href="css/estilos_calificacion.css">
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect	: 'none',
                closeEffect	: 'none'
            });
        });
    </script>
</head>
<body>
<?php
include_once ('header_public.php');

$id_res = $_GET["id_res"];

$instruccion = "SELECT * FROM restaurante WHERE idRestaurante = {$id_res}";
$datos = mysql_query($instruccion);

if ($datos) {
    while ($dato = mysql_fetch_array($datos)) {

?>
<div class="main-reservation">
    <main class="restaurant-main">
        <div class="main-wrapper">
            <h1><?=$dato["nombreRestaurante"]?></h1>
            <img src="images/frestaurants/<?=$dato["fotoPortada"];?>" alt="">
            <p><?=$dato["descripcionRestaurante"]?></p>
        </div>
    </main>
    <section class="restaurant-reservation">
       <div class="reservation-wrapper">
           <h3>Reserva Rápida</h3>
           <form action="ReservationManagement/addReservation.php" method="POST">
               <input class="banner-input" type="date" name="fechaReserva" id="date-picker" placeholder="Cualquier fecha">
               <input class="banner-input" type="datetime" id="time" placeholder="00:00">
               <input type="hidden" name="idRestaurante" value="<?=$dato["idRestaurante"]?>">
               <input class="banner-input" type="number" name="personas" id="people" placeholder="N° Personas" min="0" max="<?=$dato["capacidad"]?>">
               <input class="banner-button" type="submit" name="reservar" value="RESERVAR">
           </form>
       </div>
    </section>
</div>

<section class="restaurant-menu">
    <div class="menu-wrapper">
        <h2>Menú</h2>
        <div class="menu-container">
            <?php $carta = nl2br(htmlentities($dato["cartaRestaurante"], ENT_QUOTES, 'UTF-8')); ?>
            <p><?=$carta?></p>
        </div>
    </div>

</section>

<section class="restaurant-description">
    <div class="description-wrapper">
        <article class="description-container">
            <h2>Descripción</h2>
            <p><?=$dato["detalleRestaurante"]?></p>
        </article >
        <div class="qualities-map">
            <aside class="restaurant-qualities">
                <div>
                    <h4>Capacidad:</h4>
                    <p> <?=$dato["capacidad"]?></p>
                </div>
                <div>
                    <h4>Ocasiones:</h4>
                    <p> <?=$dato["ocasiones"]?></p>
                </div>
                <div>
                    <h4>Servicios adicionales:</h4>
                    <p> <?=$dato["serviciosAdicionales"]?></p>
                </div>
                <div>
                    <h4>Dirección:</h4>
                    <p> <?=$dato["direccionRestaurante"]?></p>
                </div>
                <div>
                    <h4>Calificalo:</h4>
                    <form id="frmCalificacion" method="post" action="RankingManagement/controls/addRanking.php">
                        <p class="clasificacion">
                            <input id="radio1" type="radio" name="estrellas" value="10">
                            <label for="radio1">★</label>
                            <input id="radio2" type="radio" name="estrellas" value="9">
                            <label for="radio2">★</label>
                            <input id="radio3" type="radio" name="estrellas" value="8">
                            <label for="radio3">★</label>
                            <input id="radio4" type="radio" name="estrellas" value="7">
                            <label for="radio4">★</label>
                            <input id="radio5" type="radio" name="estrellas" value="6">
                            <label for="radio5">★</label>
                            <input id="radio6" type="radio" name="estrellas" value="5">
                            <label for="radio6">★</label>
                            <input id="radio7" type="radio" name="estrellas" value="4">
                            <label for="radio7">★</label>
                            <input id="radio8" type="radio" name="estrellas" value="3">
                            <label for="radio8">★</label>
                            <input id="radio9" type="radio" name="estrellas" value="2">
                            <label for="radio9">★</label>
                            <input id="radio10" type="radio" name="estrellas" value="1">
                            <label for="radio10">★</label>
                        </p>
                        <input type="submit" name="calificar" value="Calificar">
                        <input type="hidden" name="idRes" value="<?=$dato["idRestaurante"]?>">
                    </form>
                </div>
            </aside>
        </div>
    </div>
</section>
<?php }
    } ?>


<section class="restaurant-img">
    <div class="img-wrapper">
        <h2>Fotos</h2>
        <div class="img-gallery">
            <a class="fancybox" rel="gallery1" href="images/food/rfood3.jpg">
                <img src="images/food/rfood3-thumpnail.jpg" alt="" />
            </a>
            <a class="fancybox" rel="gallery1" href="images/food/rfood4.jpg">
                <img src="images/food/rfood4-thumpnail.jpg" alt="" />
            </a>
            <a class="fancybox" rel="gallery1" href="images/food/rfood1.jpg">
                <img src="images/food/rfood1-thumpnail.jpg" alt="" />
            </a>
            <a class="fancybox" rel="gallery1" href="images/food/rfood2.jpg">
                <img src="images/food/rfood2-thumpnail.jpg" alt="" />
            </a>
        </div>
    </div>
</section>

<footer class="main-footer">
    <h3 class="footer-title">Come Bien</h3>
    <p class="footer-copy">&copy; 2016</p>
</footer>
</body>
</html>