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
<header class="main-header">
    <div class="mod-logo">
        <a href="principal.php">
            <img class="mod-logo__img" src="images/logo/logoext1.png" alt="">
        </a>
    </div>
    <nav class="mod-nav">
        <ul class="mod-menu">
            <li class="mod-menu__item"><a class="mod-menu__link" href="#">Usuario</a></li>
            <li class="mod-menu__item"><a class="mod-menu__link b" href="#">Login</a></li>
        </ul>
    </nav>
</header>

<div class="nav-mixed menu">
    <nav class="single-nav menu">
        <ul>
            <li><a href="#">Reserva</a></li>
            <li><a href="#">Elige</a></li>
            <li><a href="#">Ofertas</a></li>
            <li><a href="#">Rankings</a></li>
        </ul>
    </nav>
    <nav class="social-menu menu" role="navigation">
        <ul>
            <li><a href="http://facebook.com"><span class="screen-reader-text">Facebook</span></a></li>
            <li><a href="http://twitter.com"><span class="screen-reader-text">Twitter</span></a></li>
            <li><a href="http://plus.google.com"><span class="screen-reader-text">Google Plus</span></a></li>
            <li><a href="http://youtube.com"><span class="screen-reader-text">YouTube</span></a></li>
        </ul>
    </nav>
</div>
<?php
include_once("conexion.php");
$link = Conectarse();

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
            <input class="banner-input" type="date" id="date-picker" placeholder="Cualquier fecha">
            <input class="banner-input" type="datetime" id="time" placeholder="00:00">
            <input class="banner-input" type="number" id="people" placeholder="N° Personas" min="0" max="<?=$dato["capacidad"]?>">
           <input class="banner-button" type="button" value="RESERVAR">
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
                    <h4>Direcció:</h4>
                    <p> <?=$dato["direccionRestaurante"]?></p>
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