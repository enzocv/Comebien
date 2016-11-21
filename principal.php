<?php
include_once ('seguridad.php');
include_once('conexion.php');
$link = Conectarse();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
    <header class="main-header">
        <div class="mod-logo">
            <img class="mod-logo__img" src="images/logo/logoext1.png" alt="">
        </div>
        <nav class="mod-nav">
            <ul class="mod-menu">
                <li class="mod-menu__item"><a class="mod-menu__link" href="#">Usuario</a></li>
                <li class="mod-menu__item"><a class="mod-menu__link b" href="control.php?salir=si" name="salir">Salir</a></li>
            </ul>
        </nav>
    </header>

    <div class="nav-mixed menu">
        <nav class="single-nav menu">
            <ul>
                <li><a href="#">Reserva</a></li>
                <li><a href="#">Elige</a></li>
                <li><a href="#">Ofertas</a></li>
                <li><a href="ranking_view.php">Rankings</a></li>
                <li><a href="RestaurantManagement/view/listRestaurante_view.php">Gestión Restaurante</a></li>
            </ul>
        </nav>
        <nav class="social-menu menu" role="navigation">
                <nav class="single-nav menu">
                    <ul>
                        <li><a href="#"><span>Nombre Usuario</span></a></li>
                    </ul>
                </nav>
        </nav>
    </div>

    <main class="main opacity">
        <div class="copy-main">
            <h1 class="banner-title">Elige un restaurante. Y ¡Come bien!</h1>
                <p class="banner-slogan">Disfruta de lo mejor.</p>
                <div class="container-options-banner">
                    <form action="search.php" method="POST">
                        <div class="banner-option">
                            <label class="banner-label" for="location">Ingresa tu locación</label>
                            <input class="banner-input" type="text" name="locacion" placeholder="Ingresa tu locacíon" id="location">
                        </div>
                        <div class="banner-option">
                            <label class="banner-label" for="tipo-cocina">¿Qué tipo de cocina?</label>
                            <select name="tipoCocina" id="tipoCocina" class="banner-input">
                                <?php

                                $query_tipo = "SELECT * FROM tipoRestaurante";
                                $resultado_tipo = mysql_query($query_tipo);

                                if ($resultado_tipo) {
                                    while ($campo_tipo = mysql_fetch_array($resultado_tipo)) {
                                        $nombre = $campo_tipo['nombreTipo'];
                                        $id_tipo = $campo_tipo['idTipo'];

                                        echo "<option value=".$nombre.">".$nombre."</option>\n";
                                    }
                                    mysql_close();
                                }
                                ?>
                            </select>
<!--                            <input class="banner-input" type="text" name="tipoCocina" id="tipo-cocina" placeholder="Todos los tipos">-->
                        </div>
                        <div class="banner-option">
                            <label class="banner-label" for="fecha">¿Qué tipo de cocina?</label>
                            <input class="banner-input" type="date" name="fecha" id="fecha" placeholder="Cualquier fecha">
                        </div>

                        <input type="submit" class="banner-button" value="Buscar" name="buscar">


                    </form>
                </div>

        </div>
    </main>

    <section class="container-options">
        <h2 class="options-title">Restaurante?</h2>
        <div class="l-container-options">

            <article class="options__article criolla opacity">
                <h3><a href="search.php?tipo=Criolla" STYLE="color: #FFF;">Criolla</a></h3>
            </article>

            <article class="options__article oriental opacity">
                <h3><a href="search.php?tipo=Oriental" STYLE="color: #FFF;">Oriental</a></h3>
            </article>

            <article class="options__article italiana opacity">
                <h3><a href="search.php?tipo=Italiana" STYLE="color: #FFF;">Italiana</a></h3>
            </article>

            <article class="options__article parrillas opacity">
                <h3><a href="search.php?tipo=Carna y Parrillas" STYLE="color: #FFF;">Carna y Parrillas</a></h3>
            </article>

            <article class="options__article marina opacity">
                <h3><a href="search.php?tipo=Marina" STYLE="color: #FFF;">Marina</a></h3>
            </article>

            <article class="options__article polleria opacity">
                <h3><a href="search.php?tipo=Polleria" STYLE="color: #FFF;">Polleria</a></h3>
            </article>
        </div>
    </section>

    <section class="container-featured">
        <h3 class="featured-title">Lugares Top de Hoy</h3>

        <div class="l-container__featured">
            <?php
            $instruccion = "SELECT res.fotoPortada,res.nombreRestaurante, tres.nombreTipo, res.precioGeneral,
                              res.direccionRestaurante, avg(votos) as Votos,res.idRestaurante 
                              FROM ranking ran
                              inner join restaurante res
                              on res.idRestaurante = ran.idRestaurante
                              inner join tipodetalle tde
                              on tde.idRestaurante = res.idRestaurante
                              inner join tiporestaurante tres
                              on tres.idTipo = tde.idTipo
                              GROUP BY  res.idRestaurante
                              limit 0,3";
            $rs = mysql_query($instruccion) or die("Fallo la Consulta");
            while($busqueda = mysql_fetch_array($rs)) {
            ?>
            <article class="featured-box">
                <div class="copy">
                    <img  class="copy__img" src="images/frestaurants/<?=$busqueda["fotoPortada"]?>" alt="">
                    <p class="copy__restaurant"><?=$busqueda["nombreRestaurante"]?></p>
                    <p class="copy__place"><?=$busqueda["direccionRestaurante"]?></p>
                </div>
                <div class="copy__info">
                    <span style="color: crimson;">
                    <?php
                    for ($i = 1; $i <= $busqueda["Votos"]; $i++) {
                    ?>
                        &star;
                    <?php }?>
                    </span>
                    <p class="feature-precio" style="color: rgba(5,5,5,0.88);">S/. <?php echo " ".$busqueda["precioGeneral"];?></p>
                    <a href="restaurant.php?id_res=<?=$busqueda["idRestaurante"]?>" class="featured-button">Reservar</a>
                </div>

            </article>
            <?php } ?>
        </div>
    </section>

<!--    <section class="container-rankings">-->
<!--        <div class="l-container-rankings">-->
<!--            <h3 class="rankings-title">MÁS VENDIDOS</h3>-->
<!--            <img src="images/frestaurants/restaurant5.jpg" alt="" class="rankings-img">-->
<!--            <div>-->
<!--                <article>-->
<!--                    <p class="rankings-index">#1</p>-->
<!--                    <a href="#">Costa Verde</a>-->
<!--                    <p>Peruana,Barranco</p>-->
<!--                    <span>S/. 54.50</span>-->
<!--                    <span class="rankings-score">8.9</span>-->
<!--                </article>-->
<!--            </div>-->
<!--            <div>-->
<!--                <article>-->
<!--                    <p class="rankings-index">#2</p>-->
<!--                    <a href="#">nombre restaurante</a>-->
<!--                    <p>ubicacion</p>-->
<!--                    <span>S/. 54.50</span>-->
<!--                    <span>8.9</span>-->
<!--                </article>-->
<!--            </div>-->
<!--            <div>-->
<!--                <article>-->
<!--                    <p class="rankings-index">#3</p>-->
<!--                    <a href="#">nombre restaurante</a>-->
<!--                    <p>ubicacion</p>-->
<!--                    <span>S/. 54.50</span>-->
<!--                    <span>8.9</span>-->
<!--                </article>-->
<!--            </div>-->
<!--            <div>-->
<!--                <article>-->
<!--                    <p class="rankings-index">#4</p>-->
<!--                    <a href="#">nombre restaurante</a>-->
<!--                    <p>ubicacion</p>-->
<!--                    <span>S/. 54.50</span>-->
<!--                    <span>8.9</span>-->
<!--                </article>-->
<!--            </div>-->
<!--            <div>-->
<!--                <article>-->
<!--                    <p class="rankings-index">#5</p>-->
<!--                    <a href="#">nombre restaurante</a>-->
<!--                    <p>ubicacion</p>-->
<!--                    <span>S/. 54.50</span>-->
<!--                    <span>8.9</span>-->
<!--                </article>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

    <footer class="main-footer">
        <h3 class="footer-title">Come Bien</h3>
        <p class="footer-copy">&copy; 2016</p>
    </footer>

</body>
</html>