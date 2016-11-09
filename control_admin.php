<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Control de Administrador | ComeBien</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header class="main-header">
        <div class="mod-logo">
            <img class="mod-logo__img" src="images/logo/logoext1.png" alt="">
        </div>
        <nav class="mod-nav">
            <ul class="mod-menu">

            </ul>
        </nav>
    </header>

    <h2 class="control-title">Control de restaurantes</h2>
    <form action="added.php" method="post">
        <div class="container-basic-information">
            <section class="information-restaurants">
                <article class="information-restaurants__name">
                    <label class="information-restaurants__label" for="name-restaurant">Nombre del Restaurante:</label>
                    <input class="information-restaurants__input" type="text" id="name-restaurant" placeholder="Nombre del Restaurante">
                </article>
                <article class="information-restaurants__description">
                    <label class="information-restaurants__label" for="description-restaurant">Descripción del Restaurante:</label>
                    <textarea class="information-restaurants__texarea" name="description" id="description-restaurant" cols="30" rows="10"></textarea>
                </article>
                <article class="information-restaurants__stars">
                    <label class="information-restaurants__label" for="fader">Puntuación:</label>
                    <input class="information-restaurants__input" type="range" min="1" max="5" value="5" id="fader" step="1" oninput="outputUpdate(value)" class="slider">
                    <output for="fader" id="canti" >5</output>
                </article>
                <article class="information-restaurants__ubicacion">
                    <label class="information-restaurants__label" for="ubicacion-restaurant">Ubicación del Restaurante:</label>
                    <input class="information-restaurants__input" type="url" id="ubicacion-restaurant" placeholder="url google maps">
                </article>
                <article class="information-restaurants__image">
                    <label class="information-restaurants__label" for="image-restaurant">Imagen del Restaurante:</label>
                    <input class="information-restaurants__buttom" type="button" value="Agregar" id="image-restaurant">
                </article>
            </section>
        </div>

        <div class="container-information-menu">
            <section class="information-restaurants__menu">
                <label class="information-restaurants__label" for="menu-restaurant">Menu del Restaurante:</label>
                <input class="information-restaurants__buttom" type="button" value="Agregar" id="menu-restaurant">


            </section>


        </div>
        <section class="container-submit">
            <input class="information-restaurants__buttom submit" type="submit" value="Enviar">
        </section>
    </form>

    <footer class="main-footer">
        <h3 class="footer-title">Come Bien</h3>
        <p class="footer-copy">&copy; 2016</p>
    </footer>
</body>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="smoothscroll.js"></script>
<script>
    function outputUpdate(vol) {
        document.querySelector('#canti').value = vol;
    }
</script>

</html>