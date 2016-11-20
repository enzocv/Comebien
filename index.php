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
<section class="main-login">
    <h2>Login</h2>
    <form class="form-login" action="control.php" method="post" name="forml">
        <div class="user">
            <label for="usuario" class="user__lbl">Usuario:</label>
            <input class="user_txt" type="email" name="usuario" id="usuario" placeholder="example@gmail.com">
        </div>

        <div class="password">
            <label for="password" class="user__lbl">Password:</label>
            <input class="user_txt" type="password" name="password" id="password">
        </div>

        <input class="user__btn" type="submit" name="entrar" id="entrar" value="Entrar">

    </form>

</section>



<footer class="main-footer">
    <h3 class="footer-title">Come Bien</h3>
    <p class="footer-copy">&copy; 2016</p>
</footer>

</body>
</html>