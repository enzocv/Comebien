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
        <img class="mod-logo__img" src="images/logo/logoext1.png" alt="">
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
<div class="main-reservation">
    <main class="restaurant-main">
        <div class="main-wrapper">
            <h1>Restaurante Segudo Muelle</h1>
            <img src="images/frestaurants/restaurant4.jpg" alt="">
            <p><span>Cocina criolla</span>. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet delectus distinctio dolore eius eos error fugit ipsum, maxime minima.</p>
        </div>
    </main>

    <section class="restaurant-reservation">
       <div class="reservation-wrapper">
           <h3>Reserva Rápida</h3>
            <input class="banner-input" type="date" id="date-picker" placeholder="Cualquier fecha">
            <input class="banner-input" type="datetime" id="time" placeholder="00:00">
            <input class="banner-input" type="number" id="people" placeholder="N° Personas">
           <input class="banner-button" type="button" value="RESERVAR">
       </div>
    </section>
</div>

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

<section class="restaurant-menu">
    <div class="menu-wrapper">
        <h2>Menú</h2>
        <div class="menu-container">
            <h3>Carta Regular</h3>
            <h4>desde S/.35</h4>
            <ul>
                <li class="menu-title">Entradas
                <li>Ceviche Polo Marino <span>S/.20</span>
                <li>Tiradito Oriental <span>S/.25</span>
                <li>Ocopa de Camarones <span>S/.29</span>
                <li class="menu-title">Platos
                <li>Ceviche Polo Marino <span>S/.35</span>
                <li>Tiradito Oriental <span>S/.43</span>
                <li>Ocopa de Camarones <span>S/.55</span>
                <li class="menu-title">Postres
                <li>Ceviche Polo Marino <span>S/.10</span>
                <li>Tiradito Oriental <span>S/.13</span>
                <li>Ocopa de Camarones <span>S/.11</span>
            </ul>
        </div>
    </div>
    
</section>

<section class="restaurant-description">
    <div class="description-wrapper">
        <article class="description-container">
            <h2>Descripción</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto cum expedita illum mollitia quod. Ab corporis cupiditate delectus ea eaque error, et facere itaque minima molestiae nisi porro quod sequi.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto cum expedita illum mollitia quod. Ab corporis cupiditate delectus ea eaque error, et facere itaque minima molestiae nisi porro quod sequi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ratione reprehenderit sapiente. Deleniti est nam sit. Aliquid, dignissimos doloremque dolorum expedita fugit, hic in labore officia quisquam repudiandae, vel veritatis.</p>
        </article >
        <div class="qualities-map">
            <aside class="restaurant-qualities">
                <div>
                    <h4>Capacidad:</h4>
                    <p>80 personas</p>
                </div>
                <div>
                    <h4>Ocasiones:</h4>
                    <p>Románticos, negocios.</p>
                </div>
                <div>
                    <h4>Servicios adicionales:</h4>
                    <p>Wi-fi, Bar</p>
                </div>
            </aside>
            <div class="restaurant-map">
                <div class="map-container"></div>
                <div class="map-container">
                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div class="map-w"><div id="gmap_canvas" class="map-c"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:17,center:new google.maps.LatLng(-18.0066826876426,-70.24558209007415),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-18.0066826876426, -70.24558209007415)});infowindow = new google.maps.InfoWindow({content:"<b></b>Segundo Muelle<br/> Tacna" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                </div>
                <p>Calle Dos de Mayo 512, Tacna</p>
            </div>
        </div>
    </div>
</section>


<footer class="main-footer">
    <h3 class="footer-title">Come Bien</h3>
    <p class="footer-copy">&copy; 2016</p>
</footer>
</body>
</html>