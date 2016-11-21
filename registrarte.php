<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
            <li class="mod-menu__item"><a class="mod-menu__link b" href="#">Login</a></li>
        </ul>
    </nav>
</header>

<div class="nav-mixed menu">
    <!--    <nav class="single-nav menu">-->
    <!--        <ul>-->
    <!--            <li><a href="#">Reserva</a></li>-->
    <!--            <li><a href="#">Elige</a></li>-->
    <!--            <li><a href="#">Ofertas</a></li>-->
    <!--            <li><a href="#">Rankings</a></li>-->
    <!--        </ul>-->
    <!--    </nav>-->
    <nav class="social-menu menu" role="navigation">
        <ul>
            <li><a href="http://facebook.com"><span class="screen-reader-text">Facebook</span></a></li>
            <li><a href="http://twitter.com"><span class="screen-reader-text">Twitter</span></a></li>
            <li><a href="http://plus.google.com"><span class="screen-reader-text">Google Plus</span></a></li>
            <li><a href="http://youtube.com"><span class="screen-reader-text">YouTube</span></a></li>
        </ul>
    </nav>

</div>
<section class="container" style="padding: 4.3em 0;">
    <h2>Registro de Usuario</h2>

    <form class="form-horizontal" action="agregarUsuario.php" method="post" name="forml">
        <div class="form-group">
            <label class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nombre"  id="inputPassword" id="usuario">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Apellido</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="apellido"  id="inputPassword" id="usuario">

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="usuario"  id="inputPassword" placeholder="example@gmail.com" id="usuario">

            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password"  id="inputPassword" placeholder="Password">
            </div>
        </div>

        <div class="form-group ">
            <a href="index.php" class="btn-link">Regresar al Login</a>
            <input class="btn btn-danger" type="submit" name="entrar" id="entrar" value="Registrarte">
        </div>
    </form>

</section>



<footer class="main-footer">
    <p class="footer-title">Come Bien</p>
    <p class="footer-copy">&copy; 2016</p>
</footer>

</body>
</html>