<header class="main-header">
    <div class="mod-logo">
        <img class="mod-logo__img" src="../../images/logo/logoext1.png" alt="">
    </div>
    <nav class="mod-nav">
        <ul class="mod-menu">
            <li class="mod-menu__item"><a class="mod-menu__link" href="#">Usuario</a></li>
            <li class="mod-menu__item"><a class="mod-menu__link b" href="index.php">Login</a></li>
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
        <?php
        include_once('../../conexion.php');
        $link = Conectarse();
        $campo= $_GET["id"];
        $consulta = "SELECT * FROM usuario WHERE idusuario={$campo}";

        $rs = mysql_query($consulta) or die("Fallo la Consulta");

        while($datosUsuario = mysql_fetch_array($rs)) {
            ?>
            <nav class="single-nav menu">
                <ul>
                    <li><a href="#"><span><?= $datosUsuario['nombreusuario'] . " " . $datosUsuario['apellidousuario'];?></span></a></li>
                </ul>
            </nav>
            <?php
        }
        ?>
    </nav>
</div>