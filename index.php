<?php
require 'includes/app.php';
incluirTemplate("header");
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
</main>
<?php
incluirTemplate("footer");
?>