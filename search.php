<?php
    include_once ('conexion.php');
    $link = Conectarse();

    $tipoCocina = $_POST["tipoCocina"];
    $locacion   = $_POST["locacion"];

    $feha = mysql_real_escape_string($_POST['fecha']);
    $feha = date("d-m-Y", strtotime($feha));

    if($locacion == ""){
        $locacion = "Tacna";
    }
    if($tipoCocina == ""){
        $tipoCocina = "Criolla";
    }
    if($feha == "01-01-1970"){
        $feha = date("d/m/Y");
    }

    $consulta = "SELECT * FROM tipodetalle tdeta inner join restaurante res on res.idRestaurante = tdeta.idRestaurante
                inner join tiporestaurante tres on tres.idTipo = tdeta.idTipo inner join distrito dis 
                on dis.idDistrito = res.idDistrito 
                where tres.nombreTipo = '{$tipoCocina}' or dis.nombreDistrito = '{$locacion}'";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ComeBien | Search</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style_restaurantes.css">
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

    <section class="contaier-options__search">
        <h3 class="title-search">Busqueda de Restaurantes</h3>

        <div class="content-filter">
            <div class="boxs">
                <div class="box-mostrar2" id="click1">Ubicación</div>
                    <div class="box-panel" id="added1"><a name="show"></a>
                        <div class="box-elementomostrar box-ubicacion">
                            <label class="label-place" for="place">Ubicación:</label>
                            <input class="input-place" type="text" placeholder="Cuidad ,Distrito ,etc.." id="place">
                        </div>
                    </div>
            </div>

            <div class="boxs">
                <div class="box-mostrar2" id="click2">Precio</div>
                    <div class="box-panel" id="added2"><a name="show"></a>
                        <div class="box-elementomostrar box-ubicacion">
                            <label class="label-place" for="place">Precio:</label>
                            <input class="input-place" type="text" placeholder="S/." id="place2">
                        </div>
                    </div>
            </div>

            <div class="boxs">
                <div class="box-mostrar2" id="click3">Comida</div>
                    <div class="box-panel" id="added3"><a name="show"></a>
                        <div class="box-elementomostrar box-comida">
                            <label class="label-place">Comida:</label>
                            <select>
                                <option value="Criolla" selected>Criolla</option>
                                <option value="Carnes y Parrilas">Carnes y Parrilas</option>
                                <option value="Oriental">Oriental</option>
                                <option value="Marina">Marina</option>
                                <option value="Polleria">Polleria</option>
                                <option value="Italiana">Italiana</option>
                            </select>
                        </div>
                    </div>
            </div>

            <div class="boxs">
                <div class="box-mostrar2" id="click4">Ambiente</div>
                    <div class="box-panel" id="added4"><a name="show"></a>
                        <div class="box-elementomostrar box-comida">
                            <label class="label-place">Ambiente:</label>
                            <select>
                                <option value="Campestre" selected>Campestre</option>
                                <option value="Show en vivo">Show en vivo</option>
                                <option value="Frente al Mar">Frente al Mar</option>
                                <option value="Romantico">Romantico</option>
                            </select>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    
    <main class="search-main">
        <section class="search-restaurants">
            <?php
            $rs = mysql_query($consulta) or die("Fallo la Consulta");
            while($busqueda = mysql_fetch_array($rs)) {
                ?>
                <article class="search-restaurant">
                    <img class="search-restaurant__img" src="images/frestaurants/<?=$busqueda['fotoPortada']?>" alt="">
                    <section class="search-restaurant__info">
                        <h4 class="search-restaurant__info--title"><?=$busqueda['nombreRestaurante']?></h4>
                        <p class="search-restaurant__info--place"><?=$busqueda['direccionRestaurante']?></p>
                        <div class="box-help">
                            <p class="search-restaurant__info--calification"><span
                                        class="stars">&star;&star;&star;</span>calificacón</p>
                            <p class="search-restaurant__info--precio"><span class="desde">desde</span><?=$busqueda['precioGeneral']?></p>
                            <a class="search-restaurant__info--more" href="restaurant.php">Leer más..</a>
                        </div>
                    </section>
                </article>
                <?php
            }?>
        </section>
    </main>
    <footer class="main-footer">
        <h3 class="footer-title">Come Bien</h3>
        <p class="footer-copy">&copy; 2016</p>
    </footer>

    <script src="toggle-search/_search-toggle-panel.js"></script>
</body>
</html>