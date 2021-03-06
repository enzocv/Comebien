<header class="main-header">
    <div class="mod-logo">
        <a href="../../principal.php">
            <img class="mod-logo__img" src="../../images/logo/logoext1.png" alt="">
        </a>
    </div>
    <nav class="mod-nav">
        <ul class="mod-menu">
            <li class="mod-menu__item"><a class="mod-menu__link" href="#"><?=$_SESSION["nombreUsuario"]." ".$_SESSION["apellidoUsuario"]?></a></li>
            <li class="mod-menu__item"><a class="mod-menu__link b" href="../../control.php?salir=si" name="salir">Salir</a></li>
        </ul>
    </nav>
</header>

<div class="nav-mixed menu">
    <nav class="single-nav menu">
        <ul>
            <li><a href="../view/user_view.php">Reservas</a></li>
            <li><a href="../../RankingManagement/view/listRanking_view.php">Rankings</a></li>
            <?php
            if(isset($_SESSION["nivelUsuario"]) and ($_SESSION["nivelUsuario"] == "Administrador" or $_SESSION["nivelUsuario"] == "Restaurante")){
                ?>
                <li><a href="../../RestaurantManagement/view/listRestaurante_view.php">Gestión Restaurante</a></li>
            <?php }?>
        </ul>
    </nav>
    <nav class="social-menu menu" role="navigation">
        <nav class="single-nav menu">
            <ul>
                <li><a href="../../search.php?tipo=Criolla"><span>Restaurentes</span></a></li>
            </ul>
        </nav>
    </nav>
</div>