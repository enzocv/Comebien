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

    <main class="main opacity">
        <div class="copy-main">
            <h1 class="banner-title">Elige un restaurante. Y ¡Come bien!</h1>
                <p class="banner-slogan">Disfruta de lo mejor.</p>
                <div class="container-options-banner">
                    <div class="banner-option">
                        <label class="banner-label" for="location">Ingresa tu locación</label>
                        <input class="banner-input" type="text" placeholder="Ingresa tu locacíon" id="location">
                    </div>
                    <div class="banner-option">
                        <label class="banner-label" for="tipo-cocina">¿Qué tipo de cocina?</label>
                        <input class="banner-input" type="text" id="tipo-cocina" placeholder="Todos los tipos">
                    </div>
                    <div class="banner-option">
                        <label class="banner-label" for="fecha">¿Qué tipo de cocina?</label>
                        <input class="banner-input" type="date" id="fecha" placeholder="Cualquier fecha">
                    </div>
            </div>
            <a href="search.php">
                <input type="button" class="banner-button" value="Buscar">
            </a>
        </div>
    </main>

    <section class="container-options">
        <h2 class="options-title">Restaurante?</h2>
        <div class="l-container-options">
            <article class="options__article criolla opacity">
                <h3>Criolla</h3>
                <p>15 restaurantes</p>
            </article>

            <article class="options__article oriental opacity">
                <h3>Oriental</h3>
                <p>11 restaurantes</p>
            </article>

            <article class="options__article italiana opacity">
                <h3>Italiana</h3>
                <p>14 restaurantes</p>
            </article>

            <article class="options__article parrillas opacity">
                <h3>Carnes y Parrillas</h3>
                <p>17 restaurantes</p>
            </article>

            <article class="options__article marina opacity">
                <h3 class="copy__options">Marina</h3>
                <p class="copy__options">25 restaurantes</p>
            </article>

            <article class="options__article polleria opacity">
                <h3>Polleria</h3>
                <p>29 restaurantes</p>
            </article>
        </div>
    </section>

    <section class="container-featured">
        <h3 class="featured-title">Lugares Top de Hoy</h3>

        <div class="l-container__featured">

            <article class="featured-box">
                <div class="copy">
                    <img  class="copy__img" src="images/frestaurants/restaurant3.jpg" alt="">
                    <p class="copy__restaurant">Nombre Restaurante</p>
                    <p class="copy__place">Lugar</p>
                </div>
                <div class="copy__info">
                    <span>&star;&star;&star;&star;&star;</span>
                    <p class="feature-precio">precio</p>
                    <button class="featured-button">Reservar</button>
                </div>

            </article>

            <article class="featured-box">
                <div class="copy">
                    <img  class="copy__img" src="images/frestaurants/restaurant4.jpg" alt="">
                    <p class="copy__restaurant">Nombre Restaurante</p>
                    <p class="copy__place">Lugar</p>
                </div>
                <div class="copy__info">
                    <span>&star;&star;&star;&star;</span>
                    <p class="feature-precio">precio</p>
                    <button class="featured-button">Reservar</button>
                </div>

            </article>
            <article class="featured-box">
                <div class="copy">
                    <img  class="copy__img" src="images/frestaurants/restaurant6.jpg" alt="">
                    <p class="copy__restaurant">Nombre Restaurante</p>
                    <p class="copy__place">Lugar</p>
                </div>
                <div class="copy__info">
                    <span>&star;&star;&star;</span>
                    <p class="feature-precio">precio</p>
                    <button class="featured-button">Reservar</button>
                </div>

            </article>
        </div>
    </section>

    <section class="container-rankings">
        <div class="l-container-rankings">
            <h3 class="rankings-title">MÁS VENDIDOS</h3>
            <img src="images/frestaurants/restaurant5.jpg" alt="" class="rankings-img">
            <div>
                <article>
                    <p class="rankings-index">#1</p>
                    <a href="#">Costa Verde</a>
                    <p>Peruana,Barranco</p>
                    <span>S/. 54.50</span>
                    <span class="rankings-score">8.9</span>
                </article>
            </div>
            <div>
                <article>
                    <p class="rankings-index">#2</p>
                    <a href="#">nombre restaurante</a>
                    <p>ubicacion</p>
                    <span>S/. 54.50</span>
                    <span>8.9</span>
                </article>
            </div>
            <div>
                <article>
                    <p class="rankings-index">#3</p>
                    <a href="#">nombre restaurante</a>
                    <p>ubicacion</p>
                    <span>S/. 54.50</span>
                    <span>8.9</span>
                </article>
            </div>
            <div>
                <article>
                    <p class="rankings-index">#4</p>
                    <a href="#">nombre restaurante</a>
                    <p>ubicacion</p>
                    <span>S/. 54.50</span>
                    <span>8.9</span>
                </article>
            </div>
            <div>
                <article>
                    <p class="rankings-index">#5</p>
                    <a href="#">nombre restaurante</a>
                    <p>ubicacion</p>
                    <span>S/. 54.50</span>
                    <span>8.9</span>
                </article>
            </div>
        </div>

        <div class="l-container-rankings">
            <h3 class="rankings-title">MÁS VALORADOS</h3>
            <img src="images/frestaurants/restaurant6.jpg" alt="" class="rankings-img">
            <div>
                <article>
                    <p class="rankings-index">8.9</p>
                    <a href="#">Costa Verde</a>
                    <p>Peruana,Barranco</p>
                    <span>S/. 54.50</span>
                    <span>&star;&star;&star;</span>
                </article>
            </div>
            <div>
                <article>
                    <p class="rankings-index">8.7</p>
                    <a href="#">nombre restaurante</a>
                    <p>ubicacion</p>
                    <span>S/. 52.90</span>
                    <span>&star;&star;&star;</span>
                </article>
            </div>
            <div>
                <article>
                    <p class="rankings-index">7.5</p>
                    <a href="#">nombre restaurante</a>
                    <p>ubicacion</p>
                    <span>S/. 54.50</span>
                    <span>&star;&star;&star;</span>
                </article>
            </div>
            <div>
                <article>
                    <p class="rankings-index">7.2</p>
                    <a href="#">nombre restaurante</a>
                    <p>ubicacion</p>
                    <span>S/. 52.90</span>
                    <span>&star;&star;&star;</span>
                </article>
            </div>
            <div>
                <article>
                    <p class="rankings-index">7.1</p>
                    <a href="#">nombre restaurante</a>
                    <p>ubicacion</p>
                    <span>S/. 54.50</span>
                    <span>&star;&star;&star;</span>
                </article>
            </div>
        </div>

        <div class="l-container-rankings">
            <h3 class="rankings-title">MEJORES PRECIOS</h3>
            <img src="images/frestaurants/restaurant4.jpg" alt="" class="rankings-img">
            <div>
                <article>
                    <p class="rankings-index">40%</p>
                    <a href="#">Costa Verde</a>
                    <p>Peruana,Barranco</p>
                    <span>S/. 54.50</span>
                    <span>8.9</span>
                </article>
            </div>
            <div>
                <article>
                    <p class="rankings-index">38%</p>
                    <a href="#">nombre restaurante</a>
                    <p>ubicacion</p>
                    <span>S/. 54.50</span>
                    <span>8.9</span>
                </article>
            </div>
            <div>
                <article>
                    <p class="rankings-index">30%</p>
                    <a href="#">nombre restaurante</a>
                    <p>ubicacion</p>
                    <span>S/. 54.50</span>
                    <span>8.9</span>
                </article>
            </div>
            <div>
                <article>
                    <p class="rankings-index">20%</p>
                    <a href="#">nombre restaurante</a>
                    <p>ubicacion</p>
                    <span>S/. 54.50</span>
                    <span>8.9</span>
                </article>
            </div>
            <div>
                <article>
                    <p class="rankings-index">20%</p>
                    <a href="#">nombre restaurante</a>
                    <p>ubicacion</p>
                    <span>S/. 54.50</span>
                    <span>8.9</span>
                </article>
            </div>
        </div>
    </section>

    <footer class="main-footer">
        <h3 class="footer-title">Come Bien</h3>
        <p class="footer-copy">&copy; 2016</p>
    </footer>

</body>
</html>