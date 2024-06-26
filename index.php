<?php
require 'includes/app.php';
incluirTemplate("header", $pagina = "principal");
?>
<main>
    <div class="banner">
        <picture>
            <source srcset="/build/img/banner_1.avif" type="image/avif">
            <source srcset="/build/img/banner_1.webp" type="image/webp">
            <img loading="lazy" src="/build/img/banner_1.png" alt="Banner inicio">
        </picture>
    </div>
    <section class="que-hacemos">
        <h2>&#191;Qué hacemos&#63;</h2>
        <div class="acciones">
            <a href="#">
                <picture>
                    <source srcset="/build/img/01_Salud.avif" type="image/avif">
                    <source srcset="/build/img/01_Salud.webp" type="image/webp">
                    <img loading="lazy" src="/build/img/01_Salud.png" alt="Icono salud">
                </picture>
                <h3>Salud</h3>
            </a>
            <a href="#">
                <picture>
                    <source srcset="/build/img/02_Caritas_Parroquial.avif" type="image/avif">
                    <source srcset="/build/img/02_Caritas_Parroquial.webp" type="image/webp">
                    <img loading="lazy" src="/build/img/02_Caritas_Parroquial.png" alt="Icono caritas parroquial">
                </picture>
                <h3>Cáritas parroquial</h3>
            </a>
            <a href="#">
                <picture>
                    <source srcset="/build/img/03_Alimentos.avif" type="image/avif">
                    <source srcset="/build/img/03_Alimentos.webp" type="image/webp">
                    <img loading="lazy" src="/build/img/03_Alimentos.png" alt="Icono alimentos">
                </picture>
                <h3>Alimentos</h3>
            </a>
            <a href="#">
                <picture>
                    <source srcset="/build/img/04_Casos_Especiales.avif" type="image/avif">
                    <source srcset="/build/img/04_Casos_Especiales.webp" type="image/webp">
                    <img loading="lazy" src="/build/img/04_Casos_Especiales.png" alt="Icono casos especiales">
                </picture>
                <h3>Casos especiales</h3>
            </a>
        </div>
    </section>
    <section class="promocional">
        <div class="contenedor">
            <img src="/build/img/logo caritas.svg" alt="logo de la institucion">
            <div>
                <h3>En la Diócesis de Culiacán,</h3>
                <p>Caritas tiene <span class="bold"><?php echo (intval(date('Y')) - 1989); ?> años</span> ayudando a los <br class="jump"> más necesitados del centro y norte del estado</p>
            </div>
            <img src="/build/img/logo caritas.svg" alt="logo de la institucion">
        </div>
    </section>
    <section class="como-ayudar">
        <h2>&#191;Cómo ayudar&#63;</h2>
        <div class="contenedor">
            <a href="#" class="como-ayudar_item">
                <picture>
                    <source srcset="/build/img/01_Dona-tu-tiempo.avif" type="image/avif">
                    <source srcset="/build/img/01_Dona-tu-tiempo.webp" type="image/webp">
                    <img loading="lazy" src="/build/img/01_Dona-tu-tiempo.png" alt="Dona tu tiempo">
                </picture>
                <h3>Dona tu tiempo</h3>
            </a>
            <a href="#" class="como-ayudar_item">
                <picture>
                    <source srcset="/build/img/02_Dona-Recursos-Económicos.avif" type="image/avif">
                    <source srcset="/build/img/02_Dona-Recursos-Económicos.webp" type="image/webp">
                    <img loading="lazy" src="/build/img/02_Dona-Recursos-Económicos.png" alt="Dona recursos económicos">
                </picture>
                <h3>Dona recursos<br>económicos</h3>
            </a>
            <a href="#" class="como-ayudar_item">
                <picture>
                    <source srcset="/build/img/03_Dona-en-Especie.avif" type="image/avif">
                    <source srcset="/build/img/03_Dona-en-Especie.webp" type="image/webp">
                    <img loading="lazy" src="/build/img/03_Dona-en-Especie.png" alt="Dona en especie">
                </picture>
                <h3>Dona en especie</h3>
            </a>
            <a href="#" class="como-ayudar_item">
                <picture>
                    <source srcset="/build/img/04_Apoya-como-empresa.avif" type="image/avif">
                    <source srcset="/build/img/04_Apoya-como-empresa.webp" type="image/webp">
                    <img loading="lazy" src="/build/img/04_Apoya-como-empresa.png" alt="Apoya como empresa">
                </picture>
                <h3>Apoya como<br>empresa</h3>
            </a>
            <a href="#" class="como-ayudar_item">
                <picture>
                    <source srcset="/build/img/05_Apoya-como-profesionista.avif" type="image/avif">
                    <source srcset="/build/img/05_Apoya-como-profesionista.webp" type="image/webp">
                    <img loading="lazy" src="/build/img/05_Apoya-como-profesionista.png" alt="Apoya como profesionista">
                </picture>
                <h3>Apoya como<br>profesionista</h3>
            </a>
        </div>
    </section>
    <section class="nuestro-pan">
        <h2>Nuestro pan de cada día</h2>
        <div class="contenedor">
            <button class="carousel__button carousel__button--left" onclick="moveLeft()"><span>&#8249;</span></button>
            <div class="carousel__container">
                <div class="carousel__track">
                    <div class="carousel__slide">
                        <picture>
                            <source srcset="/build/img/navidad.avif" type="image/avif">
                            <source srcset="/build/img/navidad.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/navidad.png" alt="Navidad 2024">
                        </picture>
                        <div class="carousel__caption">
                            <h3>Navidad 2024</h3>
                            <p>25 de diciembre</p>
                        </div>
                    </div>
                    <div class="carousel__slide">
                        <picture>
                            <source srcset="/build/img/reyes.avif" type="image/avif">
                            <source srcset="/build/img/reyes.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/reyes.png" alt="Día de Reyes 2024">
                        </picture>
                        <div class="carousel__caption">
                            <h3>Día de Reyes 2024</h3>
                            <p>06 de enero</p>
                        </div>
                    </div>
                    <div class="carousel__slide">
                        <picture>
                            <source srcset="/build/img/misa.avif" type="image/avif">
                            <source srcset="/build/img/misa.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/misa.png" alt="Misa 12 Diciembre">
                        </picture>
                        <div class="carousel__caption">
                            <h3>Misa 12 Diciembre</h3>
                            <p>12 de diciembre</p>
                        </div>
                    </div>
                    <div class="carousel__slide">
                        <picture>
                            <source srcset="/build/img/posada.avif" type="image/avif">
                            <source srcset="/build/img/posada.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/posada.png" alt="Posada Cáritas">
                        </picture>
                        <div class="carousel__caption">
                            <h3>Posada Cáritas</h3>
                            <p>15 de diciembre</p>
                        </div>
                    </div>
                    <div class="carousel__slide">
                        <picture>
                            <source srcset="/build/img/testing.avif" type="image/avif">
                            <source srcset="/build/img/testing.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/testing.png" alt="Navidad 2024">
                        </picture>
                        <div class="carousel__caption">
                            <h3>Navidad 2024</h3>
                            <p>25 de diciembre</p>
                        </div>
                    </div>
                    <div class="carousel__slide">
                        <picture>
                            <source srcset="/build/img/reyes.avif" type="image/avif">
                            <source srcset="/build/img/reyes.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/reyes.png" alt="Día de Reyes 2024">
                        </picture>
                        <div class="carousel__caption">
                            <h3>Día de Reyes 2024</h3>
                            <p>06 de enero</p>
                        </div>
                    </div>
                    <div class="carousel__slide">
                        <picture>
                            <source srcset="/build/img/misa.avif" type="image/avif">
                            <source srcset="/build/img/misa.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/misa.png" alt="Misa 12 Diciembre">
                        </picture>
                        <div class="carousel__caption">
                            <h3>Misa 12 Diciembre</h3>
                            <p>12 de diciembre</p>
                        </div>
                    </div>
                    <div class="carousel__slide">
                        <picture>
                            <source srcset="/build/img/posada.avif" type="image/avif">
                            <source srcset="/build/img/posada.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/posada.png" alt="Posada Cáritas">
                        </picture>
                        <div class="carousel__caption">
                            <h3>Posada Cáritas</h3>
                            <p>15 de diciembre</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel__button carousel__button--right" onclick="moveRight()"><span>&#8250;</span></button>
        </div>
    </section>
</main>
<?php
incluirTemplate("footer", $pagina = "principal");
?>